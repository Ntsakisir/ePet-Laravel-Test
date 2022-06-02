const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'gothic': ['CENTURYGOTHICREGULAR'],
            'gothic-bold': ['CENTURYGOTHICBOLD'],
            'quicksand': ['QUICKSANDREGULAR'],
            'quicksand-bold': ['QUICKSANDBOLD']
          },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#F8F7F5',
            'yellow': '#FCD800',
            'green': '#9BD7B3',
            'orange':'#FB8400',
            'red':'#FF0000',
            'grey' : {
              DEFAULT : '#C4C4C4',
              'light' : '#E5E5E5',
              'dark' : '#5C5C5C',
            },
            'blue' : {
              DEFAULT : '#191D63',
              'light-1' : '#30498D',
              'light-2' : '#495B8A',
            },
          },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
