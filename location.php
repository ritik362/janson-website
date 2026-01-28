<?php include "header.php"; ?>



<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

:root {
    --primary-color: #121212;
    --primary-light: #1E1E1E;
    --secondary-color: #C6A98C;
    --text-color: #E0E0E0;
    --text-heading: #FFFFFF;
    --light-color: #FFFFFF;
    --bg-light: #1E1E1E;
    --border-color: #333333;
    --font-primary: 'Poppins', sans-serif;
    --border-radius-main: 10px;
    --shadow-light: 0 4px 15px rgba(0,0,0,0.2);
    --shadow-medium: 0 8px 25px rgba(0,0,0,0.4);
    --transition-speed: 0.35s;
}

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:var(--font-primary);
}

body{
    background:var(--primary-color);
    color:var(--text-color);
}

/* HERO */
.location-hero{
    height:45vh;
    background:
    linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.8)),
    url("Gemini_Generated_Image_8qg6gm8qg6gm8qg6.png");
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
}

.location-hero h1{
    color:var(--text-heading);
    font-size:42px;
    margin-bottom:10px;
}

.location-hero p{
    color:#ccc;
}

/* CONTAINER */
.container{
    /* max-width:1300px; */
    /* margin:auto; */
    /* padding:80px 20px; */
}

/* TITLE */
.section-title{
    text-align:center;
    margin-bottom:60px;
}

.section-title span{
    color:var(--secondary-color);
    letter-spacing:2px;
    font-size:14px;
}

.section-title h2{
    font-size:34px;
    color:var(--text-heading);
}

/* GRID */
.location-grid{
    display:grid;
    grid-template-columns:repeat(5,1fr);
    gap:25px;
}

/* CARD */
.location-card{
    background:var(--primary-light);
    border:1px solid var(--border-color);
    border-radius:var(--border-radius-main);
    box-shadow:var(--shadow-light);
    transition:var(--transition-speed);
}

.location-card:hover{
    transform:translateY(-8px);
    box-shadow:var(--shadow-medium);
    border-color:var(--secondary-color);
}

/* LINK */
.location-card a{
    display:block;
    padding:30px 20px;
    text-align:center;
    text-decoration:none;
    color:inherit;
}

/* ICON */
.location-card i{
    font-size:28px;
    color:var(--secondary-color);
    margin-bottom:12px;
}

/* NAME */
.location-card h4{
    font-size:16px;
    font-weight:500;
    color:var(--light-color);
}

/* CTA */
.location-cta{
    background:linear-gradient(145deg,#181818,#101010);
    padding:70px 20px;
    text-align:center;
    border-top:1px solid var(--border-color);
}

.location-cta h3{
    font-size:28px;
    margin-bottom:15px;
    color:var(--text-heading);
}

.location-cta p{
    color:#ccc;
    margin-bottom:25px;
}

.location-cta a{
    display:inline-block;
    padding:12px 28px;
    background:var(--secondary-color);
    color:#000;
    text-decoration:none;
    border-radius:30px;
    transition:var(--transition-speed);
}

.location-cta a:hover{
    background:#b89a7b;
}

/* RESPONSIVE */
@media(max-width:1100px){
    .location-grid{grid-template-columns:repeat(4,1fr);}
}

@media(max-width:850px){
    .location-grid{grid-template-columns:repeat(3,1fr);}
}

@media(max-width:600px){
    .location-grid{grid-template-columns:repeat(2,1fr);}
    .location-hero h1{font-size:30px;}
}

@media(max-width:400px){
    .location-grid{grid-template-columns:1fr;}
}

</style>

</head>
<body>

<!-- HERO -->
<section class="location-hero">
    <div>
        <h1>Our Global Presence</h1>
        <p>Serving customers across India and worldwide</p>
    </div>
</section>


<!-- LOCATIONS -->
<section class="container">

<div class="section-title">
    <span>LOCATIONS</span>
    <h2>Where We Operate</h2>
</div>


<div class="location-grid">

<?php
$locations = [
"delhi","gurgaon","noida","faridabad","ghaziabad",
"chennai","bangalore","pune","dubai","abudhabi",
"muscat","kuwait","doha","kathmandu","jaipur",
"chandigarh","lucknow","patna","hyderabad","bahrain"
];

foreach($locations as $city){
    echo '
    <div class="location-card">
        <a href="'.$city.'/index.php">
            <i class="fas fa-map-marker-alt"></i>
            <h4>'.ucwords($city).'</h4>
        </a>
    </div>
    ';
}
?>

</div>

</section>


<!-- CTA -->
<section class="location-cta">
    <h3>Looking for Our Nearest Office?</h3>
    <p>Contact our support team for guidance.</p>
    <a href="contact.php">Contact Us</a>
</section>


<?php include "footer.php"; ?>


