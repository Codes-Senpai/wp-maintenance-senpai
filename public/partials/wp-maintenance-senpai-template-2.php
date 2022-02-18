<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://amine.senpai.codes/
 * @since      1.0.0
 *
 * @package    Wp_Maintenance_Senpai
 * @subpackage Wp_Maintenance_Senpai/public/partials
 */
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo get_bloginfo( 'name' ); ?> under Maintenance</title>
  <meta name="keywords" content="Maintenance Mode" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="index, follow" />
  <style>
* {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
}
html {
  height: 100%;
}
body {
  color: #fff;
  background-color: #ccc;
  display: flex;
  font-size: 1em;
  overflow: hidden;
  line-height: 1em;
  max-width: 100%;
  min-height: 100%;
  position: relative;
  align-items: center;
  justify-content: center;
  align-content: center;
}
main {
}
article {
  padding: 6vmin 2vmin;
  text-align: center;
}
figure {
  margin: 0 auto 6vmin;
  width: 20vmax;
}
svg {
  max-width: 100%;
}
h1 {
  font-family: "Oswald", sans-serif;
  font-size: 5vmax;
  letter-spacing: 0.1vmin;
  line-height: 6.5vmax;
  margin: 0 0 2.5vmax;
  text-transform: uppercase;
}
p {
  font-family: "Roboto", sans-serif;
  font-size: 3vmax;
  margin: 0;
}

  </style>
</head>

<body onload="return random_bg()">
  <main>
    <article>
      <figure>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 150">
          <defs>
            <style>
              .maintenance-svg {
                fill: #fff;
                fill-rule: evenodd;
              }
            </style>
          </defs>
          <title>Maintenance</title>
          <path class="maintenance-svg" d="M79,96l-3.18,6.81,5.56,5.66,6.69-3.24a22.82,22.82,0,0,0,4.76,2l2.48,7.1h7.86l2.48-7.1a22.77,22.77,0,0,0,4.76-2l6.69,3.24,5.56-5.66L119.51,96a23.61,23.61,0,0,0,2-4.84l7-2.52v-8l-7-2.52a23.61,23.61,0,0,0-2-4.84l3.18-6.81-5.56-5.66-6.69,3.24a22.82,22.82,0,0,0-4.76-2L103.2,55H95.34l-2.48,7.1a22.69,22.69,0,0,0-4.76,2L81.4,60.82l-5.56,5.66L79,73.29a23.47,23.47,0,0,0-2,4.84l-7,2.52v8l7,2.52A23.47,23.47,0,0,0,79,96ZM99.27,74.75a9.9,9.9,0,1,1-9.73,9.9A9.82,9.82,0,0,1,99.27,74.75Z" />
          <path class="maintenance-svg" d="M185.42,0H14.58A14.73,14.73,0,0,0,0,14.86V135.14A14.72,14.72,0,0,0,14.58,150H185.42A14.73,14.73,0,0,0,200,135.14V14.86A14.72,14.72,0,0,0,185.42,0ZM167.15,11.88a5.2,5.2,0,1,1-5.11,5.2A5.15,5.15,0,0,1,167.15,11.88Zm-17.52,0a5.2,5.2,0,1,1-5.11,5.2A5.15,5.15,0,0,1,149.64,11.88Zm40.15,112.88a14.73,14.73,0,0,1-14.6,14.84H24.82a14.72,14.72,0,0,1-14.6-14.84V32.67H189.78ZM184.67,22.28a5.2,5.2,0,1,1,5.11-5.2A5.15,5.15,0,0,1,184.67,22.28Z" />
        </svg>
      </figure>
      <section>
        <header>
          <h1>
            We are currently down for maintenance
          </h1>
        </header>
        <p>
          We will return shortly.
        </p>
      </section>
    </article>
  </main>
  <script>
    function random_bg() {
      // hexadecimal starting symbol
      var color = "#";
      // Set your colors here
      var letters = ["e51c23", "e91e63", "9c27b0", "673ab7", "ff5177", "ff4081", "e040fb", "7c4dff", "3f51b5", "5677fc", "03a9f4", "00bcd4", "536dfe", "6889ff", "40c4ff", "009688", "259b24", "8bc34a", "ff9800", "ff5722", "ffab40", "ff6e40", "c5d5cb", "9fa8a3", "b3c2bf", "3b3a36", "c9d8c5", "a8b6bf", "7d4627", "c9c9c9", "9ad3de", "89bdd3", "6ed3cf", "9068be", "e62739", "3fb0ac", "173e43", "e6cf8b", "b56969", "22264b", "98dafe", "daad86", "312c32", "b0aac2", "6534ff", "5e0231", "e6af4b", "e05038", "334431", "06000a", "e43235", "667467", "262216", "97743a", "431c5d", "e05915", "cdd422"];
      // Select random color to be assigned
      color += letters[Math.floor(Math.random() * letters.length)];
      // Setting the random color on your HTML element.
      document.body.style.background = color;
    }
  </script>
</body>

</html>
