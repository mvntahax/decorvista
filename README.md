# DecorVista

A modern **Laravel + MySQL based interior design & e-commerce web application** where users can browse designs, save their favorites, book consultations with designers, and shop products for their home décor.  

This project includes **user authentication**, **design browsing with categories**, **saved designs (wishlist)**, **shopping cart**, and **consultation booking** with designers.

![demo](demo.gif)

Live Project: [https://decorvista.ct.ws](https://decorvista.ct.ws)

## Features

- **Authentication** – Secure sign-up, login, and profile management  
- **Design Browsing** – Explore designs, filter by categories, and view designer profiles  
- **Saved Designs** – Save/unsave designs to your personal list  
- **Designer Profiles** – View detailed designer profiles and their work  
- **Consultations** – Book consultations with designers at preferred dates & times  
- **Product Catalog** – Browse home décor products with search & category filters  
- **Shopping Cart** – Add, update, or remove products easily  
- **Responsive UI** – Clean, mobile-friendly design  

## Tech Stack

- **Laravel 12 (PHP 8+)** – MVC backend framework  
- **MySQL** – Relational database  
- **Tailwind CSS** – Modern, utility-first styling  
- **Blade Templates** – Server-side rendering for views  
- **JavaScript (Vanilla / Alpine.js)** – Lightweight interactivity  

## Getting Started

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/decorvista.git
   cd decorvista
   ```

2. **Install dependencies**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Set up the environment**

   * Copy `.env.example` to `.env`
   * Update your **database credentials** and other environment variables:

     ```bash
     php artisan key:generate
     php artisan migrate --seed
     ```

4. **Run locally**

   ```bash
   php artisan serve
   ```

   Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Contributing

Contributions are welcome!
Feel free to **fork** this repo, create a feature branch, and submit a **pull request** with your improvements.

## License

This project is licensed under the **MIT License** – you are free to use, modify, and distribute it.

## Author

Built with 💙 by [@mvntahax](https://github.com/mvntahax)
