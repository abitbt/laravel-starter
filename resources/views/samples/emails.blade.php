<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL STYLES -->
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
                <h1 class="page-title">Email templates</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- END PAGE HEADER -->
        <!-- END PAGE HEADER -->
        <!-- BEGIN PAGE BODY -->
        <main id="content" class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card card-md">
                  <div class="card-stamp card-stamp-lg">
                    <div class="card-stamp-icon bg-primary">
                      <!-- Download SVG icon from http://tabler.io/icons/icon/mail -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                        focusable="false"
                        class="icon icon-1"
                      >
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                        <path d="M3 7l9 6l9 -6" />
                      </svg>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-10">
                        <h3 class="h1">Tabler Emails</h3>
                        <div class="markdown text-secondary fs-3">
                          80 eye-catching, customizable and responsive email templates to improve your email communication. No coding skills needed.
                        </div>
                        <div class="mt-3">
                          <a href="https://r.tabler.io/buy-emails" class="btn btn-primary" target="_blank">Buy all emails for $29</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="row row-cards" data-masonry='{"percentPosition": true }'>
                  <div class="col-4">
                    <a
                      href="./static/emails/absence.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about absence to employees at work"
                      data-bs-description="Allows to define in which days the employee was absent and exactly for what reason. Considering the hours of the week or month. Clearly shows the report of each week on the specific hours of work  the employee with own photo."
                      data-bs-image="./static/emails/absence.jpg"
                    >
                      <img
                        src="./static/emails/absence.jpg"
                        class="img-fluid rounded"
                        alt="Email template about absence to employees at work"
                        width="1248"
                        height="1616"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/access-token.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/access-token.jpg"
                    >
                      <img src="./static/emails/access-token.jpg" class="img-fluid rounded" alt="" width="1248" height="1032" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/account-deleted.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/account-deleted.jpg"
                    >
                      <img src="./static/emails/account-deleted.jpg" class="img-fluid rounded" alt="" width="1248" height="1152" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/activities.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template related to the activities"
                      data-bs-description="Allows to define the time with the kilometers spent on the activity at the given time. It shows the exact distance traveled and the number of people who &#34;like it&#34;. In addition, the template allows you to add photos and shows the weather during activity."
                      data-bs-image="./static/emails/activities.jpg"
                    >
                      <img
                        src="./static/emails/activities.jpg"
                        class="img-fluid rounded"
                        alt="Email template related to the activities"
                        width="1248"
                        height="2130"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/blog-post.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about posted blog posts"
                      data-bs-description="Allows to create an e-mail about new posts that just appeared on the blog. Shows a part of  content along with a photo and title. Refers to the entire text or other posts posted on the blog."
                      data-bs-image="./static/emails/blog-post.jpg"
                    >
                      <img
                        src="./static/emails/blog-post.jpg"
                        class="img-fluid rounded"
                        alt="Email template about posted blog posts"
                        width="1248"
                        height="2506"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/calendar.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/calendar.jpg"
                    >
                      <img src="./static/emails/calendar.jpg" class="img-fluid rounded" alt="" width="1248" height="2744" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/changelog.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/changelog.jpg"
                    >
                      <img src="./static/emails/changelog.jpg" class="img-fluid rounded" alt="" width="1248" height="1956" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/collection.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about the proposition of the collection"
                      data-bs-description="Shows preferred themed blogs to follow. The template shows the five best blogs along with their short description with a photo, link to the subscription and the author of the text. Also shows another collections for scroll contents."
                      data-bs-image="./static/emails/collection.jpg"
                    >
                      <img
                        src="./static/emails/collection.jpg"
                        class="img-fluid rounded"
                        alt="Email template about the proposition of the collection"
                        width="1248"
                        height="2774"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/company-email.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/company-email.jpg"
                    >
                      <img src="./static/emails/company-email.jpg" class="img-fluid rounded" alt="" width="1248" height="1604" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/conference.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with an invitation to a conference"
                      data-bs-description="Allows to include a short description of the conference along with the topics discussed during the event. Describes who will run the conferences and for what reason. Also shows the time of start the conference and direct registration button on the website."
                      data-bs-image="./static/emails/conference.jpg"
                    >
                      <img
                        src="./static/emails/conference.jpg"
                        class="img-fluid rounded"
                        alt="Email template with an invitation to a conference"
                        width="1248"
                        height="3686"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/confirm-email.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/confirm-email.jpg"
                    >
                      <img src="./static/emails/confirm-email.jpg" class="img-fluid rounded" alt="" width="1248" height="1484" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/confirmation.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with the booking confirmation"
                      data-bs-description="Allows to create an email with all  important information about the reservation. Shows important details about sales. Confirms the reservation and shows the amount paid along with the date of purchase and definite place."
                      data-bs-image="./static/emails/confirmation.jpg"
                    >
                      <img
                        src="./static/emails/confirmation.jpg"
                        class="img-fluid rounded"
                        alt="Email template with the booking confirmation"
                        width="1248"
                        height="4450"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/deployment-failed.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/deployment-failed.jpg"
                    >
                      <img src="./static/emails/deployment-failed.jpg" class="img-fluid rounded" alt="" width="1248" height="1906" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/domain-configuration.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/domain-configuration.jpg"
                    >
                      <img src="./static/emails/domain-configuration.jpg" class="img-fluid rounded" alt="" width="1248" height="1474" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/download.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with message about the completed download"
                      data-bs-description="Shows which link is ready to download items. Confirms the number of attachments downloaded along with its size.Shows how many times you can click on a definite file and the time of expiry."
                      data-bs-image="./static/emails/download.jpg"
                    >
                      <img
                        src="./static/emails/download.jpg"
                        class="img-fluid rounded"
                        alt="Email template with message about the completed download"
                        width="1248"
                        height="1244"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/empty.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Empty email template for modifications"
                      data-bs-description="Allows to create your own content proper for users. Add information that are not in the templates. For example a personal note or reminder about a specific event, etc. for your company"
                      data-bs-image="./static/emails/empty.jpg"
                    >
                      <img src="./static/emails/empty.jpg" class="img-fluid rounded" alt="Empty email template for modifications" width="1248" height="244" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/error.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with informaton about the error"
                      data-bs-description="Allows to reduce the number of errors in the software. Describes the problem that related with the HTML code. Automatically sends to debug your content. Identifies the cause of the failure and allows to the remove. Shows the date of error."
                      data-bs-image="./static/emails/error.jpg"
                    >
                      <img
                        src="./static/emails/error.jpg"
                        class="img-fluid rounded"
                        alt="Email template with informaton about the error"
                        width="1248"
                        height="1596"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/event-invitation.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with an invitation to a event"
                      data-bs-description="Allows to create an email showing a new user group. Informs about the just formed group with short description and support to join in. It shows people who have already joined and automatically sends you to registration."
                      data-bs-image="./static/emails/event-invitation.jpg"
                    >
                      <img
                        src="./static/emails/event-invitation.jpg"
                        class="img-fluid rounded"
                        alt="Email template with an invitation to a event"
                        width="1248"
                        height="1974"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/featured-photo.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with the featured photo"
                      data-bs-description="Allows to show the most popular photograph with the author and the date of publication from a given month. Shows the number of people who liked the photo. In addition shows following pictures, which may also be liked."
                      data-bs-image="./static/emails/featured-photo.jpg"
                    >
                      <img
                        src="./static/emails/featured-photo.jpg"
                        class="img-fluid rounded"
                        alt="Email template with the featured photo"
                        width="1248"
                        height="2614"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/features.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template for the features"
                      data-bs-description="Allows to popularize a new software feature. It presents in detail what is involved with the HTML code. Shows simple and quick modifications. Offers a trial version, just press the button. Each description is with a picture."
                      data-bs-image="./static/emails/features.jpg"
                    >
                      <img src="./static/emails/features.jpg" class="img-fluid rounded" alt="Email template for the features" width="1248" height="3536" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/features-2.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with new features"
                      data-bs-description="Allows  to display the latest added features with a description and picture. Shortly describes each of new features and presents how to use it. Shows only the selected new functions, and sends to the rest of them by the button."
                      data-bs-image="./static/emails/features-2.jpg"
                    >
                      <img src="./static/emails/features-2.jpg" class="img-fluid rounded" alt="Email template with new features" width="1248" height="2652" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/features-3.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/features-3.jpg"
                    >
                      <img src="./static/emails/features-3.jpg" class="img-fluid rounded" alt="" width="1248" height="1340" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/footer-1.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/footer-1.jpg"
                    >
                      <img src="./static/emails/footer-1.jpg" class="img-fluid rounded" alt="" width="1248" height="244" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/footer-2.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/footer-2.jpg"
                    >
                      <img src="./static/emails/footer-2.jpg" class="img-fluid rounded" alt="" width="1248" height="244" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/footer-3.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/footer-3.jpg"
                    >
                      <img src="./static/emails/footer-3.jpg" class="img-fluid rounded" alt="" width="1248" height="244" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/footer-4.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/footer-4.jpg"
                    >
                      <img src="./static/emails/footer-4.jpg" class="img-fluid rounded" alt="" width="1248" height="244" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/friend-request.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template for a friend request"
                      data-bs-description="Allows to send a separate invitation to friends. Email show the photo of the person who sends the invitation along with the name. You can accept or refuse the invitation any time. Below it is information from which platform the invitation came from."
                      data-bs-image="./static/emails/friend-request.jpg"
                    >
                      <img
                        src="./static/emails/friend-request.jpg"
                        class="img-fluid rounded"
                        alt="Email template for a friend request"
                        width="1248"
                        height="1344"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/gdpr.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about GDPR"
                      data-bs-description="Shows an email template which is adapted to changes in user data. It protects individual, personal data, privacy the free flow of content. Include content about the elementary legal conditions of users."
                      data-bs-image="./static/emails/gdpr.jpg"
                    >
                      <img src="./static/emails/gdpr.jpg" class="img-fluid rounded" alt="Email template about GDPR" width="1248" height="3072" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/help.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with help to users"
                      data-bs-description="Allows specify the occurs problem with a quick solution. Presents the most popular questions related to the theme of the problem and answers. Additionally, automatically moves to live chat  to find a solution."
                      data-bs-image="./static/emails/help.jpg"
                    >
                      <img src="./static/emails/help.jpg" class="img-fluid rounded" alt="Email template with help to users" width="1248" height="2606" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/invitation.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with an invitation to collaborate"
                      data-bs-description="Shows whos and for what purpose invites to cooperate.Viev the entire invitation by clicking on the button or visiting the profile of the person who invites you to learn a little more about them. In addition accept or reject the invitation any time."
                      data-bs-image="./static/emails/invitation.jpg"
                    >
                      <img
                        src="./static/emails/invitation.jpg"
                        class="img-fluid rounded"
                        alt="Email template with an invitation to collaborate"
                        width="1248"
                        height="1294"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/invitation-2.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/invitation-2.jpg"
                    >
                      <img src="./static/emails/invitation-2.jpg" class="img-fluid rounded" alt="" width="1248" height="1652" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/invoice.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with an invoice"
                      data-bs-description="Shows the exact details of the payer with the purchased items on the pictures. Shows the amount of purchased goods including tax and the final amount. Shows the date of purchase and a direct button to print the invoice or contact with the company."
                      data-bs-image="./static/emails/invoice.jpg"
                    >
                      <img src="./static/emails/invoice.jpg" class="img-fluid rounded" alt="Email template with an invoice" width="1248" height="3366" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/last-conversation.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with the last conversation"
                      data-bs-description="Allows to view the last conversation with the selected person. It presents a fragment of the conversation. To read all conversation click on the button &#39;read more&#39;. Instead of names of users, shows a photo of them."
                      data-bs-image="./static/emails/last-conversation.jpg"
                    >
                      <img
                        src="./static/emails/last-conversation.jpg"
                        class="img-fluid rounded"
                        alt="Email template with the last conversation"
                        width="1248"
                        height="2524"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/license.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template related with the license"
                      data-bs-description="Allows to create an email related to the acquired license by the user. There is the name of the purchased service, the registration code to  activated and the details of the license, always with date expiration at the end."
                      data-bs-image="./static/emails/license.jpg"
                    >
                      <img
                        src="./static/emails/license.jpg"
                        class="img-fluid rounded"
                        alt="Email template related with the license"
                        width="1248"
                        height="1730"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/magic-link.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/magic-link.jpg"
                    >
                      <img src="./static/emails/magic-link.jpg" class="img-fluid rounded" alt="" width="1248" height="1180" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/message.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with a new message"
                      data-bs-description="Allows for quick response, informing that the user has responded to our message. Shows from who the message comes from and shows the written content. Below are the buttons for direct response or for managing reservations"
                      data-bs-image="./static/emails/message.jpg"
                    >
                      <img src="./static/emails/message.jpg" class="img-fluid rounded" alt="Email template with a new message" width="1248" height="1964" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/missing-order.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with the missing order"
                      data-bs-description="Shows the shopping list in the basket. Sends products along with photos that were in the basket and expect realization. Offers an additional discount when transaction will complete. Also sends back by the button to continue the order."
                      data-bs-image="./static/emails/missing-order.jpg"
                    >
                      <img
                        src="./static/emails/missing-order.jpg"
                        class="img-fluid rounded"
                        alt="Email template with the missing order"
                        width="1248"
                        height="1776"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/new-app.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/new-app.jpg"
                    >
                      <img src="./static/emails/new-app.jpg" class="img-fluid rounded" alt="" width="1248" height="1270" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/new-photos.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/new-photos.jpg"
                    >
                      <img src="./static/emails/new-photos.jpg" class="img-fluid rounded" alt="" width="1248" height="1768" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/newsletter.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template showing the newsletter"
                      data-bs-description="Shows the latest information, messages in blog posts on thematic blogs or social networks. It presents articles that may interested the user. Clicking by on &#34;read more&#34;, the button moves to the whole text to the read."
                      data-bs-image="./static/emails/newsletter.jpg"
                    >
                      <img
                        src="./static/emails/newsletter.jpg"
                        class="img-fluid rounded"
                        alt="Email template showing the newsletter"
                        width="1248"
                        height="5290"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/off-deals.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/off-deals.jpg"
                    >
                      <img src="./static/emails/off-deals.jpg" class="img-fluid rounded" alt="" width="1248" height="2508" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/offer.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with promocional offer"
                      data-bs-description="Allows to create an email witht the discount on product. It presents an interesting offer for users, which saves money. There is a description of what the offer is about, along with the expiry date of the offer. Sends by a button to get a discount."
                      data-bs-image="./static/emails/offer.jpg"
                    >
                      <img src="./static/emails/offer.jpg" class="img-fluid rounded" alt="Email template with promocional offer" width="1248" height="1228" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/order.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with order summary"
                      data-bs-description="Shows the order with the purchased products. Displays the order number along with the necessary information and the total cost and date of purchase. Underneath shows the proposed items and &#39;back to shop&#39; button to buy something else."
                      data-bs-image="./static/emails/order.jpg"
                    >
                      <img src="./static/emails/order.jpg" class="img-fluid rounded" alt="Email template with order summary" width="1248" height="3688" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/otp-code.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/otp-code.jpg"
                    >
                      <img src="./static/emails/otp-code.jpg" class="img-fluid rounded" alt="" width="1248" height="1908" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/password.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with reset password for the account"
                      data-bs-description="Allows to send a generated message with instructions to change the password when you forget it. Using the button, we move to the page to give a new password. Below there is a URL adress where you can find more information about changing the password."
                      data-bs-image="./static/emails/password.jpg"
                    >
                      <img
                        src="./static/emails/password.jpg"
                        class="img-fluid rounded"
                        alt="Email template with reset password for the account"
                        width="1248"
                        height="1196"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/payment.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with payment details"
                      data-bs-description="Shows an email template with the exact cost of the transaction along with information about the date, method of payment and invoice confirmation. An additional option is add a loan function from the  minimum amount."
                      data-bs-image="./static/emails/payment.jpg"
                    >
                      <img src="./static/emails/payment.jpg" class="img-fluid rounded" alt="Email template with payment details" width="1248" height="1812" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/popular-posts.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with popular post"
                      data-bs-description="Shows in the email the most viewed posts by users with the beginning of the text from the blog with the picture. Below are the next popular posts with the referring button to read more articles on thematic blogs."
                      data-bs-image="./static/emails/popular-posts.jpg"
                    >
                      <img
                        src="./static/emails/popular-posts.jpg"
                        class="img-fluid rounded"
                        alt="Email template with popular post"
                        width="1248"
                        height="3196"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/post.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/post.jpg"
                    >
                      <img src="./static/emails/post.jpg" class="img-fluid rounded" alt="" width="1248" height="1504" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/pricing.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with the given pricing"
                      data-bs-description="Shows price offers along with attractive discounts between different packages. Each package contains various options and a different price. Each package satisfies different user needs. Through the &#34;update&#34; button moves to purchase the offer."
                      data-bs-image="./static/emails/pricing.jpg"
                    >
                      <img src="./static/emails/pricing.jpg" class="img-fluid rounded" alt="Email template with the given pricing" width="1248" height="1480" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/product-available.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with an available product"
                      data-bs-description="Allows to send an offer that was not currently available. Shows a specific product with photo and price. Use the button to refer to the website to purchase the product. Below are products that may also interest the recipient."
                      data-bs-image="./static/emails/product-available.jpg"
                    >
                      <img
                        src="./static/emails/product-available.jpg"
                        class="img-fluid rounded"
                        alt="Email template with an available product"
                        width="1248"
                        height="2122"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/progress.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with progress"
                      data-bs-description="Shows the overall progress of the user at a given time related to the activity. Thanks to the graph, clearly describes the progress. Defines the day on which the activity took place along with the necessary information about it."
                      data-bs-image="./static/emails/progress.jpg"
                    >
                      <img src="./static/emails/progress.jpg" class="img-fluid rounded" alt="Email template with progress" width="1248" height="1354" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/projects.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with a project overview"
                      data-bs-description="Allows to show employees&#39; projects. Shows with the graph the percentage of the completed project along with a description of what it concerns and the person who coordinates the project. Using the button, it refers to managing all projects"
                      data-bs-image="./static/emails/projects.jpg"
                    >
                      <img
                        src="./static/emails/projects.jpg"
                        class="img-fluid rounded"
                        alt="Email template with a project overview"
                        width="1248"
                        height="1640"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/promo-code.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template associated with promo code."
                      data-bs-description="Shows specially generated code for users to take uses of the promotion. Specifies the type and amount of the discount and its expiration date. It sends directly to the store to buy a product at a lower price than at the beginning."
                      data-bs-image="./static/emails/promo-code.jpg"
                    >
                      <img
                        src="./static/emails/promo-code.jpg"
                        class="img-fluid rounded"
                        alt="Email template associated with promo code."
                        width="1248"
                        height="1342"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/promotions.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/promotions.jpg"
                    >
                      <img src="./static/emails/promotions.jpg" class="img-fluid rounded" alt="" width="1248" height="3058" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/promotions-2.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/promotions-2.jpg"
                    >
                      <img src="./static/emails/promotions-2.jpg" class="img-fluid rounded" alt="" width="1248" height="1626" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/register.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about the registration of a new user"
                      data-bs-description="Allows to confirm your data and complete registration of a new user in the system. It presents what the registration is about, along with the &#34;confirm your email address&#34; button. At the end is display thanks for registration"
                      data-bs-image="./static/emails/register.jpg"
                    >
                      <img
                        src="./static/emails/register.jpg"
                        class="img-fluid rounded"
                        alt="Email template about the registration of a new user"
                        width="1248"
                        height="1464"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/reminder.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with an event reminder"
                      data-bs-description="Allows to create an email referring to the private calendar. Sends notification of upcoming events with the date and place of the meeting. In addition, below are details of what the meeting is about, along with button to confirm your arrival."
                      data-bs-image="./static/emails/reminder.jpg"
                    >
                      <img
                        src="./static/emails/reminder.jpg"
                        class="img-fluid rounded"
                        alt="Email template with an event reminder"
                        width="1248"
                        height="1152"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/repo-stats.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about REPO review"
                      data-bs-description="Shows financial transactions that regulate the liquidity of the banking sector. Presents a statistics graph and also open and closed problems together with new. Through photos  shows current management intermediaries"
                      data-bs-image="./static/emails/repo-stats.jpg"
                    >
                      <img src="./static/emails/repo-stats.jpg" class="img-fluid rounded" alt="Email template about REPO review" width="1248" height="2604" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/review.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/review.jpg"
                    >
                      <img src="./static/emails/review.jpg" class="img-fluid rounded" alt="" width="1248" height="1340" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/sale.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template for sales"
                      data-bs-description="Shows ready text with photo in which it informs about the promotion. Offers a specific discount percentage along with a time limit. In addition, it refers directly to the purchase of the offer. Indicates which time the promotion is active."
                      data-bs-image="./static/emails/sale.jpg"
                    >
                      <img src="./static/emails/sale.jpg" class="img-fluid rounded" alt="Email template for sales" width="1248" height="1620" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/schedule.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template connected with the schedule"
                      data-bs-description="Allows to organize time at work with accurate employee data. Shows the status of the employee along with the time worked on a particular day. Employees are represented by a photo with the profession they perform."
                      data-bs-image="./static/emails/schedule.jpg"
                    >
                      <img
                        src="./static/emails/schedule.jpg"
                        class="img-fluid rounded"
                        alt="Email template connected with the schedule"
                        width="1248"
                        height="1768"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/security-alert.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/security-alert.jpg"
                    >
                      <img src="./static/emails/security-alert.jpg" class="img-fluid rounded" alt="" width="1248" height="1272" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/shipped.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template informing about the shipment"
                      data-bs-description="Allows to create an email which all the inportant details of the purchase. Email informs you that the product has been sent. Contains the tracking number of the shipment and the name of the company through which the product was sent."
                      data-bs-image="./static/emails/shipped.jpg"
                    >
                      <img
                        src="./static/emails/shipped.jpg"
                        class="img-fluid rounded"
                        alt="Email template informing about the shipment"
                        width="1248"
                        height="1006"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/stats.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about statistics"
                      data-bs-description="Allows on the graph to present statistics on website visits. Shows how many users have used the site at any given time. It divides users into those who have used the site and those who do not. It refers to the entire report by the button."
                      data-bs-image="./static/emails/stats.jpg"
                    >
                      <img src="./static/emails/stats.jpg" class="img-fluid rounded" alt="Email template about statistics" width="1248" height="1944" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/stats-2.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about statistics"
                      data-bs-description="Shows company statistics on graph from a specific time with a specific system update that was entered. Shows the percentage of people who benefited from it, who were satisfied and those who rejected the update. Refers to full report."
                      data-bs-image="./static/emails/stats-2.jpg"
                    >
                      <img src="./static/emails/stats-2.jpg" class="img-fluid rounded" alt="Email template about statistics" width="1248" height="1564" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/subscribe.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about subscriptions"
                      data-bs-description="Allows to send emails about proposed subscriptions. Every suggestion presents a short description of the application with logo. Next to each is a button that refers to the automatic subscription of the application. It also has a button to see more."
                      data-bs-image="./static/emails/subscribe.jpg"
                    >
                      <img src="./static/emails/subscribe.jpg" class="img-fluid rounded" alt="Email template about subscriptions" width="1248" height="1816" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/subscription.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about confirmation of subscription"
                      data-bs-description="Allows you to send an email about the request to accept the subscription. The message informs that thanks to the subscription the user will be up to date with new products. Refer by the button to subscribe."
                      data-bs-image="./static/emails/subscription.jpg"
                    >
                      <img
                        src="./static/emails/subscription.jpg"
                        class="img-fluid rounded"
                        alt="Email template about confirmation of subscription"
                        width="1248"
                        height="1260"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/survey.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about survey"
                      data-bs-description="Allows users to help improve the content. Sends a thank you for participating in the conference and asks for an opinion about it and an indication of whether they would recommend the content to friends. The scale is from 1 to 10."
                      data-bs-image="./static/emails/survey.jpg"
                    >
                      <img src="./static/emails/survey.jpg" class="img-fluid rounded" alt="Email template about survey" width="1248" height="1996" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/survey-emoji.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/survey-emoji.jpg"
                    >
                      <img src="./static/emails/survey-emoji.jpg" class="img-fluid rounded" alt="" width="1248" height="1834" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/todo.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with a list of things to do"
                      data-bs-description="Shows the monthly result of the to-do list. It contains the given activities showing which of them are you made with a specific date. Each action has a picture about the activity. It sends you with a button to set up, manage your to-do list"
                      data-bs-image="./static/emails/todo.jpg"
                    >
                      <img
                        src="./static/emails/todo.jpg"
                        class="img-fluid rounded"
                        alt="Email template with a list of things to do"
                        width="1248"
                        height="1388"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/top-comments.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with the top comments"
                      data-bs-description="Shows the most relevant and best comments that relate to the company, product, brand. This template show comments along with the author of the text. The content is clear and transparent. In addition, there is a button below for see more comments."
                      data-bs-image="./static/emails/top-comments.jpg"
                    >
                      <img
                        src="./static/emails/top-comments.jpg"
                        class="img-fluid rounded"
                        alt="Email template with the top comments"
                        width="1248"
                        height="1436"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/ui-colors.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with available colors"
                      data-bs-description="Shows the available color palette in the table with codes. The colors are grouped into basic colors, social colors and variations of colors. A variety of colors allows everyone to choose something for themselves."
                      data-bs-image="./static/emails/ui-colors.jpg"
                    >
                      <img
                        src="./static/emails/ui-colors.jpg"
                        class="img-fluid rounded"
                        alt="Email template with available colors"
                        width="1248"
                        height="2008"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/ui-grid.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with a grid system"
                      data-bs-description="Allows to create your own system, in which the grid is adapted. The width and length of the template depends on your preferences. Types of columns have been described with their number. The grid width adapts to the device on which it is run."
                      data-bs-image="./static/emails/ui-grid.jpg"
                    >
                      <img src="./static/emails/ui-grid.jpg" class="img-fluid rounded" alt="Email template with a grid system" width="1248" height="3296" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/ui-typography.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template about typography"
                      data-bs-description="Shows how the structures engaging the language in the tabler are shaped. Refers to the all typography. The template facilitates reading and writing in the system, not limited to one space. Additionally, shows the dimension of visual communication."
                      data-bs-image="./static/emails/ui-typography.jpg"
                    >
                      <img src="./static/emails/ui-typography.jpg" class="img-fluid rounded" alt="Email template about typography" width="1248" height="2360" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/uptime-report.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/uptime-report.jpg"
                    >
                      <img src="./static/emails/uptime-report.jpg" class="img-fluid rounded" alt="" width="1248" height="1750" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/valentines-1.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template for Valentine&#39;s Day 1"
                      data-bs-description="Template designed especially for Valentine&#39;s Day with donate a free year on the tabler. You can give it to every person. This is the best way to thank you that you are with us.The button automatically allows you to send a gift."
                      data-bs-image="./static/emails/valentines-1.jpg"
                    >
                      <img
                        src="./static/emails/valentines-1.jpg"
                        class="img-fluid rounded"
                        alt="Email template for Valentine's Day 1"
                        width="1248"
                        height="1868"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/valentines-2.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template for Valentine&#39;s Day 2"
                      data-bs-description="Template designed especially for Valentine&#39;s Day that saves 50% of the price. Automatically calculates the discount and shows the price after the discount. This is the best way to thank you that you are with us. The button sends you to buy a product."
                      data-bs-image="./static/emails/valentines-2.jpg"
                    >
                      <img
                        src="./static/emails/valentines-2.jpg"
                        class="img-fluid rounded"
                        alt="Email template for Valentine's Day 2"
                        width="1248"
                        height="2520"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/visitors-map.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template related with the vistitor map"
                      data-bs-description="Shows using graphics from which territory visitors arrived during one week. Shows the number of page views from a given region with precise statistics. Additionally, shows how many people are using the program and how many people closed account."
                      data-bs-image="./static/emails/visitors-map.jpg"
                    >
                      <img
                        src="./static/emails/visitors-map.jpg"
                        class="img-fluid rounded"
                        alt="Email template related with the vistitor map"
                        width="1248"
                        height="3006"
                      />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/welcome.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title=""
                      data-bs-description=""
                      data-bs-image="./static/emails/welcome.jpg"
                    >
                      <img src="./static/emails/welcome.jpg" class="img-fluid rounded" alt="" width="1248" height="1484" />
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      href="./static/emails/wishlist.jpg"
                      data-bs-toggle="modal"
                      data-bs-target="#email-modal"
                      data-bs-title="Email template with a wishlist update"
                      data-bs-description="Allows display information about products that were not available before. It shows that the product that was in the basket is already completed in the magazine. Shows graphics with product and the amount. In addition sends a wish to the wishlist."
                      data-bs-image="./static/emails/wishlist.jpg"
                    >
                      <img
                        src="./static/emails/wishlist.jpg"
                        class="img-fluid rounded"
                        alt="Email template with a wishlist update"
                        width="1248"
                        height="2388"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="email-modal" aria-hidden="true" aria-labelledby="email-modal-label" tabindex="-1">
              <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <div class="modal-body p-0">
                    <div class="row g-0">
                      <div class="col-6">
                        <div class="p-6 bg-surface-secondary rounded-start">
                          <img src="" class="img-fluid rounded-start" data-email-image />
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="p-7">
                          <div class="markdown">
                            <h3 data-email-title></h3>
                            <p data-email-description></p>
                          </div>
                          <div class="mt-6">
                            <a href="https://r.tabler.io/buy-emails" class="btn btn-primary w-100" target="_blank">Buy emails for $29</a>
                          </div>
                        </div>
                      </div>
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
    <!-- BEGIN PAGE LIBRARIES -->
    <!-- END PAGE LIBRARIES -->
    @include('samples.includes.scripts')
  </body>
</html>
