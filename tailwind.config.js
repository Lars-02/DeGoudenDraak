const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.trueGray,
            indigo: colors.indigo,
            red: colors.rose,
            yellow: colors.amber,
            blue: colors.blue,
            bright_yellow: '#FFFF00',
        }
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('tailwind-scrollbar-hide'),
    ],
}
