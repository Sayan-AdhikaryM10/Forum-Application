<h1>🗣️ Forum Website</h1>
<em><p>An interactive forum web application built with (e.g. React/Node.js, Django/Flask, or Laravel/Vue etc.), enabling users to browse programming categories, create discussion threads, and engage with other users in a community-driven Q&A environment.</p></em>


<p>Logged out view: browse topics, sign up/login</p>

<h2>🔍 Features</h2>
<ul>
<li>Browse by Category: Users can select from programming categories (e.g., Flutter, Python, Bootstrap, Java, PHP, AngularJS) and view threads in each category.</li>

<ul>Authentication:

<li>Guests can browse categories and view threads.</li>

<li>Registered users can sign up, log in, log out (with feedback messages like “logout successfully!”), and post new threads or replies.</li>
</ul>

Post Discussions: Authenticated users can submit a subject and detailed message to start a discussion thread.

View Queries: Threads show the author name and message. Users can scroll to view queries, replies, and multiple posts by the same user.

Search: A global search bar to find threads across all categories.

Responsive UI: Clean, mobile-friendly layout inspired by Bootstrap or a CSS framework.
</ul>

🧩 Tech Stack
| Layer          | Technology                                                                       |
| -------------- | -------------------------------------------------------------------------------- |
| Frontend       | HTML5, CSS3, JavaScript (Bootstrap or TailwindCSS, optionally React/Vue/Angular) |
| Backend        | PHP (Laravel)                                                                    |
| Database       | MySQL / PostgreSQL / MongoDB                                                     |
| Authentication | Sessions, JWT, or built-in Auth                                                  |
| Deployment     | Heroku, Netlify, Vercel, or self-hosted                                          |




🚀 Getting Started
Prerequisites

> PHP installed
> Database (MySQL/PostgreSQL/MongoDB)
> Git


1. Installation
  Clone the repo
  git clone https://github.com/Sayan-AdhikaryM10/Forum_Websit.git
  cd forum-website

2.Install dependencies
  PHP / Laravel example:
  composer install
  php artisan migrate
  php artisan serve


3. Configure environment variables
   Create a .env file with your database credentials, secret keys, etc.


4. Access the app
    Navigate to http://localhost:PORT/ to explore the app.
    Browse categories
    Sign up / log in
    Start new threads or post replies

📂 Project Structure
/Forum
├── vscode/
      ├── settings.json
├── assets/
      ├── about.php
      ├── contact.php
      ├── dbconnect.php
      ├── footer.php
      ├── header.php
      ├── login.php
      ├── loginhandle.php
      ├── logout.php
      ├── search.php
      ├── signup.php
      ├── signuphandle.php
├── dataBase/ 
      ├── forum.sql
├── img/
├── databace.txt
├── index.php
├── threadlist.php
├── threads.php
    

> backend/: Authentication, thread CRUD, database models

> frontend/: HTML templates (e.g., EJS, Django templates, Blade)

> public/: CSS styling and carousel images


🎯 To-Do & Future Enhancements

> Pagination for threads & replies
> User profiles with avatars and post counts
> Thread search with filters (by category/date/author)
> Upvoting/downvoting or marking answers as “accepted”
> Notifications for replies
> Mobile responsive design improvements

🙌 Contributing

1.Fork the repository

2.Create your feature branch (git checkout -b feature/AwesomeFeature)

3.Commit your changes (git commit -m "Add awesome feature")

4.Push to the branch (git push origin feature/AwesomeFeature)

5.Open a Pull Request and describe your improvements


📝 License
Distributed under the MIT License. See LICENSE for details.


📧 Contact
Maintainer: Sayan Adhikary
Email:  sayanadhikary831@gmail.com
Portfolio: leogodadhikary.000webhostapp.com






   
