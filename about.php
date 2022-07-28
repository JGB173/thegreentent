<?php include 'head.php'; ?>

<?php include"setup.php";
    
    $sql = "SELECT * FROM pages where id=1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        #debugging print_r($row);
        $title1=$row["title1"];
        $para1=$row["para1"];
        $image1=$row["img1"];
      
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>
<body>
    <div class="container">

        <header class="about-page-bg-img">
            
            <?php include 'nav.php'; ?>

            <span class="header-title">
                <h1>About</h1>
            </span>
        </header>   

        <?php include 'mobile-nav.php'; ?>

        <main>
            <h1><?php print $title1; ?></h1>
            <div class="about-page-main"> 
                <span id="about-page-paragraph-1">
                <?php print $para1; ?>                
                </span>

                <span id="about-page-paragraph-2">
                    The Green Tent is located on the Matakana cycleway close to our vibrant village with our famous market, great dining options, shops & boutique cinema The Matakana Coast is a fantastic area to visit with it's stunning beaches, regional parks, and surf spots - make it your next adventure Surrounded by farmland The Green Tent is super private and relaxing, make yourself at home and enjoy the peaceful rural setting
                </span>

                <h1 id="info">Info</h1>
                    <ul id="info-list">
                        <li>Air Conditioning</li>
                        <li>Bathtub</li>
                        <li>Bedrooms: 1</li>
                        <li>Beds: 1</li>
                        <li>Bathroom: 1</li>
                        <li>Kitchen</li>
                        <li>Wi-Fi</li>
                        <li>Tv</li>
                        <li>Dedicated Workspace</li>
                    </ul>

                <h1 id="rates">Rates</h1>
                    <ul id="rates-list">
                        <li>MIDWEEK (SUNDAY-THURSDAY)<br>One night stay $270 + $60 cleaning fee </li>
                        <li>Two or more nights mid week<br>$260 per night + $60 cleaning fee</li>
                        <li>WEEKENDS<br>2 night minimum stay $580</li>
                    </ul>
            </div>
        </main>
        
<?php include 'bottom.php'; ?>