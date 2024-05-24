/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
        colors: {
            'off-white' : '#F5EFE6',
            'beige' : '#E8DFCA',
            'sage' : '#4F6F52',
            'pine' : '#1A4D2E',

        }
    },
  },
  plugins: [],
}

