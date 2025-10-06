<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Text features - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <a href="#content" class="visually-hidden skip-link">Skip to main content</a>
    <div class="page">
      @include('samples.includes.header')
    @include('samples.includes.navbar')
      <div class="page-wrapper">
        <!-- BEGIN PAGE HEADER -->
        <!-- BEGIN PAGE HEADER -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h1 class="page-title">Text features</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <main id="content" class="page-body">
          <div class="container-xl">
            <div class="row">
              <div class="col-7">
                <div class="card card-lg">
                  <div class="card-body">
                    <div class="markdown">
                      <h3>Text features</h3>
                      <p>
                        HTML provides various tags to format text and add meaning. For example, <strong>important words</strong> can be highlighted, and
                        <em>emphasized text</em> can be italicized.
                      </p>
                      <p>If you want to visit an interesting website, check out <a href="https://tabler.io" target="_blank">this page</a>.</p>
                      <p>
                        The term <abbr data-bs-toggle="tooltip" data-bs-placement="top" title="Hypertext Markup Language">HTML</abbr> is widely used in web
                        development.
                      </p>
                      <p>Previously, the instruction said <del>"Do not include images."</del> However, <ins>"You may now add images."</ins></p>
                      <blockquote cite="https://tabler.io">"The best way to predict the future is to create it." – Peter Drucker</blockquote>
                      <p>Sometimes, <mark>highlighting important text</mark> can improve readability.</p>
                      <p>In JavaScript, you can log messages using the following code: <code>console.log('Hello, world!');</code></p>
                      <p>To copy text on Windows, use <kbd>Ctrl + C</kbd>. On macOS, use <kbd>Cmd + C</kbd>.</p>
                      <p>Water is written chemically as H<sub>2</sub>O, while Einstein’s famous equation is E = mc<sup>2</sup>.</p>
                      <p>Many people mistakenly spell <span class="text-incorrect">"recieve"</span> instead of <span class="text-correct">"receive"</span>.</p>
                      <p>
                        The correct way to write the date format is <span class="text-correct">"February 12, 2025"</span>, not
                        <span class="text-incorrect">"12th February, 2025"</span> in American English.
                      </p>
                      <p>
                        If you need select text, you can use your mouse or keyboard. To select text using your mouse, click and drag the cursor over the text
                        <span class="text-selected">you want to highlight</span>.
                      </p>
                      <p><small>Disclaimer: This text is for demonstration purposes only.</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card card-lg">
                  <div class="card-body">
                    <div class="markdown">
                      <h1>
                        Heading 1 by
                        <a class="mention"
                          ><span class="mention-avatar" style="background-image: url(/static/avatars/035f.jpg)"></span
                          ><span class="visually-hidden">@</span>JohnDoe</a
                        >
                      </h1>
                      <h2>
                        Heading 2 by
                        <a class="mention"
                          ><span class="mention-avatar" style="background-image: url(/static/avatars/035f.jpg)"></span
                          ><span class="visually-hidden">@</span>JohnDoe</a
                        >
                      </h2>
                      <h3>
                        Heading 3 by
                        <a class="mention"
                          ><span class="mention-avatar" style="background-image: url(/static/avatars/035f.jpg)"></span
                          ><span class="visually-hidden">@</span>JohnDoe</a
                        >
                      </h3>
                      <h4>
                        Heading 4 by
                        <a class="mention"
                          ><span class="mention-avatar" style="background-image: url(/static/avatars/035f.jpg)"></span
                          ><span class="visually-hidden">@</span>JohnDoe</a
                        >
                      </h4>
                      <h5>
                        Heading 5 by
                        <a class="mention"
                          ><span class="mention-avatar" style="background-image: url(/static/avatars/035f.jpg)"></span
                          ><span class="visually-hidden">@</span>JohnDoe</a
                        >
                      </h5>
                      <h6>
                        Heading 6 by
                        <a class="mention"
                          ><span class="mention-avatar" style="background-image: url(/static/avatars/035f.jpg)"></span
                          ><span class="visually-hidden">@</span>JohnDoe</a
                        >
                      </h6>
                      <p>
                        Tabler is a modern UI framework which
                        <span class="text-incorrect" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">provide</span> developers with a
                        lot of <span class="text-incorrect">pre-build</span> components and customizable options. It is
                        <span class="text-incorrect">build</span> on Bootstrap, making it easy to integrate into existing projects. The design is clean,
                        responsive, and accessible, ensuring that <span class="text-incorrect">user</span> can navigate through
                        <span class="text-incorrect">interface</span> easily. Tabler also <span class="text-incorrect">support</span> all modern browsers, but
                        some features may not work properly on Internet Explorer. With <span class="text-incorrect">it's</span> lightweight structure and
                        optimized performance, Tabler helps developers create stunning web applications faster.
                      </p>
                      <p>
                        Hey
                        <a class="mention"
                          ><span class="mention-avatar" style="background-image: url(/static/avatars/035f.jpg)"></span
                          ><span class="visually-hidden">@</span>JohnDoe</a
                        >, have you seen the latest updates on <a class="mention">#WebDevelopment<span class="mention-count">16</span></a
                        >?
                        <a class="mention"
                          ><span class="mention-avatar" style="background-image: url(/static/avatars/035f.jpg)"></span
                          ><span class="visually-hidden">@</span>JaneSmith</a
                        >
                        just shared an interesting article about
                        <a class="mention"><span class="mention-app" style="background-image: url(/static/brands/messenger.svg)"></span>Messenger</a> and
                        <a class="mention"><span class="mention-app" style="background-image: url(/static/brands/netflix.svg)"></span>Netflix</a>!
                      </p>
                      <p>
                        The sky is <span class="mention"><span class="mention-color bg-blue"></span>#066fd1</span>, the grass is
                        <span class="mention"><span class="mention-color bg-green"></span>rgb(47, 179, 68)</span>, fire trucks are often
                        <span class="mention"><span class="mention-color bg-red"></span>red</span>, oranges are
                        <span class="mention"><span class="mention-color bg-orange"></span>hsl(24deg, 94.49%, 49.8%)</span>. Some flowers are
                        <span class="mention"><span class="mention-color bg-purple"></span>hwb(288.35deg, 24.31%, 21.18%)</span>.
                      </p>
                      <hr />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- END PAGE BODY -->
        @include('samples.includes.footer')
      </div>
    </div>
    @include('samples.includes.settings')
    @include('samples.includes.scripts')
  </body>
</html>
