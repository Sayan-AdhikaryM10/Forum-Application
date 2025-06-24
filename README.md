
# 🗣️ Forum Website

*An interactive forum web application built with (e.g. React/Node.js, Django/Flask, or Laravel/Vue etc.), enabling users to browse programming categories, create discussion threads, and engage with other users in a community-driven Q&A environment.*

Logged out view: browse topics, sign up/login

## 🔍 Features

- **Browse by Category**: Users can select from programming categories (e.g., Flutter, Python, Bootstrap, Java, PHP, AngularJS) and view threads in each category.
- **Authentication**:
  - Guests can browse categories and view threads.
  - Registered users can sign up, log in, log out (with feedback messages like “logout successfully!”), and post new threads or replies.
- **Post Discussions**: Authenticated users can submit a subject and detailed message to start a discussion thread.
- **View Queries**: Threads show the author name and message. Users can scroll to view queries, replies, and multiple posts by the same user.
- **Search**: A global search bar to find threads across all categories.
- **Responsive UI**: Clean, mobile-friendly layout inspired by Bootstrap or a CSS framework.

## 🧩 Tech Stack

| Layer          | Technology                                                                       |
| -------------- | -------------------------------------------------------------------------------- |
| Frontend       | HTML5, CSS3, JavaScript (Bootstrap or TailwindCSS, optionally React/Vue/Angular) |
| Backend        | PHP (Laravel)                                                                    |
| Database       | MySQL / PostgreSQL / MongoDB                                                     |
| Authentication | Sessions, JWT, or built-in Auth                                                  |
| Deployment     | Heroku, Netlify, Vercel, or self-hosted                                          |

## 🚀 Getting Started

### Prerequisites

- PHP installed
- Database (MySQL/PostgreSQL/MongoDB)
- Git

### 1. Installation

Clone the repo:

```bash
git clone https://github.com/Sayan-AdhikaryM10/Forum_Websit.git
cd forum-website
```

### 2. Install dependencies

For PHP / Laravel example:

```bash
composer install
php artisan migrate
php artisan serve
```

### 3. Configure environment variables

Create a `.env` file with your database credentials, secret keys, etc.

### 4. Access the app

Navigate to `http://localhost:PORT/` to explore the app.

- Browse categories
- Sign up / log in
- Start new threads or post replies

## 📂 Project Structure

```
/Forum
├── vscode/
│   └── settings.json
├── assets/
│   ├── about.php
│   ├── contact.php
│   ├── dbconnect.php
│   ├── footer.php
│   ├── header.php
│   ├── login.php
│   ├── loginhandle.php
│   ├── logout.php
│   ├── search.php
│   ├── signup.php
│   ├── signuphandle.php
├── dataBase/
│   └── forum.sql
├── img/
├── databace.txt
├── index.php
├── threadlist.php
├── threads.php
```

- `backend/`: Authentication, thread CRUD, database models
- `frontend/`: HTML templates (e.g., EJS, Django templates, Blade)
- `public/`: CSS styling and carousel images

## 📸 Screenshots

![Screenshot 1](Forum/screenshorts/1.png)
![Screenshot 2](Forum/screenshorts/2.png)
![Screenshot 3](Forum/screenshorts/3.png)
![Screenshot 4](Forum/screenshorts/4.png)
![Screenshot 5](Forum/screenshorts/5.png)
![Screenshot 6](Forum/screenshorts/6.png)
![Screenshot 7](Forum/screenshorts/7.png)
![Screenshot 8](Forum/screenshorts/8.png)

## 🎯 To-Do & Future Enhancements

- Pagination for threads & replies
- User profiles with avatars and post counts
- Thread search with filters (by category/date/author)
- Upvoting/downvoting or marking answers as “accepted”
- Notifications for replies
- Mobile responsive design improvements

## 🙌 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AwesomeFeature`)
3. Commit your changes (`git commit -m "Add awesome feature"`)
4. Push to the branch (`git push origin feature/AwesomeFeature`)
5. Open a Pull Request and describe your improvements

## 📝 License

Distributed under the MIT License. See LICENSE for details.

## 📧 Contact

**Maintainer**: Sayan Adhikary  
**Email**: sayanadhikary831@gmail.com  
**Portfolio**: [https://sayanadhikary.free.nf/](https://sayanadhikary.free.nf/)
