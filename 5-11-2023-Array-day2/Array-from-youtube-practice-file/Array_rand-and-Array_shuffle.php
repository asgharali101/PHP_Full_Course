<style>
h2 {
    font-size: 20px;
    color: yellow;
    padding: 12px;
    display: inline-block;
}

h3 {
    display: inline-block;
    margin-left: 10px;
}
</style>

<?php

$developers = ['Asghar', 'Ahmed', 'Azad'];

// $devsave = shuffle($developers);
$devsave = array_rand($developers);



echo $developers[$devsave] . "<br>";

echo "<h3>About Web developers</h3>";
echo "<p>They are a dedicated team of professionals with a passion for
crafting exceptional online experiences. <h2>{$developers[$devsave]}</h2> brings a wealth of expertise in various web technologies,
including HTML, CSS, JavaScript, and popular frameworks like React 
and Vue.js. Their commitment to staying abreast of the latest industry
trends ensures that our projects are not only cutting-edge but also 
optimized for performance and user experience.
</p>";
?>