<?php

use App\Models\User;

test('user can view users list', function () {
    $user = User::factory()->create();
    User::factory()->count(5)->create();

    $this->actingAs($user)
        ->get(route('users.index'))
        ->assertOk()
        ->assertViewIs('users.index')
        ->assertViewHas('users');
});

test('guest cannot view users list', function () {
    $this->get(route('users.index'))
        ->assertRedirect(route('login'));
});

test('user can search users', function () {
    $user = User::factory()->create();
    $searchUser = User::factory()->create(['name' => 'John Doe']);
    User::factory()->create(['name' => 'Jane Smith']);

    $this->actingAs($user)
        ->get(route('users.index', ['search' => 'John']))
        ->assertOk()
        ->assertSee('John Doe')
        ->assertDontSee('Jane Smith');
});

test('user can view create user form', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(route('users.create'))
        ->assertOk()
        ->assertViewIs('users.create');
});

test('user can create new user', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post(route('users.store'), [
            'name' => 'New User',
            'email' => 'newuser@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ])
        ->assertRedirect();

    expect(User::where('email', 'newuser@example.com')->exists())->toBeTrue();
});

test('user creation validates required fields', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post(route('users.store'), [])
        ->assertSessionHasErrors(['name', 'email', 'password']);
});

test('user creation validates unique email', function () {
    $user = User::factory()->create();
    $existingUser = User::factory()->create(['email' => 'existing@example.com']);

    $this->actingAs($user)
        ->post(route('users.store'), [
            'name' => 'New User',
            'email' => 'existing@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ])
        ->assertSessionHasErrors(['email']);
});

test('user creation validates password confirmation', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->post(route('users.store'), [
            'name' => 'New User',
            'email' => 'newuser@example.com',
            'password' => 'password123',
            'password_confirmation' => 'different',
        ])
        ->assertSessionHasErrors(['password']);
});

test('user can view user details', function () {
    $user = User::factory()->create();
    $viewUser = User::factory()->create(['name' => 'John Doe']);

    $this->actingAs($user)
        ->get(route('users.show', $viewUser))
        ->assertOk()
        ->assertViewIs('users.show')
        ->assertSee('John Doe');
});

test('user can view edit user form', function () {
    $user = User::factory()->create();
    $editUser = User::factory()->create();

    $this->actingAs($user)
        ->get(route('users.edit', $editUser))
        ->assertOk()
        ->assertViewIs('users.edit')
        ->assertViewHas('user', $editUser);
});

test('user can update existing user', function () {
    $user = User::factory()->create();
    $editUser = User::factory()->create(['name' => 'Old Name']);

    $this->actingAs($user)
        ->put(route('users.update', $editUser), [
            'name' => 'Updated Name',
            'email' => $editUser->email,
        ])
        ->assertRedirect(route('users.show', $editUser));

    expect($editUser->fresh()->name)->toBe('Updated Name');
});

test('user can update user password', function () {
    $user = User::factory()->create();
    $editUser = User::factory()->create();
    $oldPassword = $editUser->password;

    $this->actingAs($user)
        ->put(route('users.update', $editUser), [
            'name' => $editUser->name,
            'email' => $editUser->email,
            'password' => 'newpassword123',
            'password_confirmation' => 'newpassword123',
        ])
        ->assertRedirect(route('users.show', $editUser));

    expect($editUser->fresh()->password)->not->toBe($oldPassword);
});

test('user update validates email uniqueness', function () {
    $user = User::factory()->create();
    $editUser = User::factory()->create();
    $existingUser = User::factory()->create(['email' => 'existing@example.com']);

    $this->actingAs($user)
        ->put(route('users.update', $editUser), [
            'name' => 'Updated Name',
            'email' => 'existing@example.com',
        ])
        ->assertSessionHasErrors(['email']);
});

test('user can delete another user', function () {
    $user = User::factory()->create();
    $deleteUser = User::factory()->create();

    $this->actingAs($user)
        ->delete(route('users.destroy', $deleteUser))
        ->assertRedirect(route('users.index'));

    expect(User::find($deleteUser->id))->toBeNull();
});

test('user cannot delete themselves', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->delete(route('users.destroy', $user))
        ->assertForbidden();

    expect(User::find($user->id))->not->toBeNull();
});

test('guest cannot create users', function () {
    $this->post(route('users.store'), [
        'name' => 'New User',
        'email' => 'newuser@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ])->assertRedirect(route('login'));
});

test('guest cannot update users', function () {
    $user = User::factory()->create();

    $this->put(route('users.update', $user), [
        'name' => 'Updated Name',
        'email' => $user->email,
    ])->assertRedirect(route('login'));
});

test('guest cannot delete users', function () {
    $user = User::factory()->create();

    $this->delete(route('users.destroy', $user))
        ->assertRedirect(route('login'));
});
