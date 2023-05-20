
export default {
  darkMode:'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      
    },
    fontFamily:{
      harlow: [
        'Harlow Solid Italic'
      ]
    },
  },
  
  plugins: [
    require('flowbite/plugin')
  ],
}

