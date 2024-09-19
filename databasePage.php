<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/databasePage.css">
    <link rel="stylesheet" href="styles/sidebar.css">
    <link rel="stylesheet" href="styles/body.css">
    <title>Database Alteration</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Rubik-->
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Anton-->
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!--Roboto-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body style="height: 5000px;">
    <section class="left-section">
        <div class="utm-logo">
            <img class="utm-logo-image" src="images/UTM_LOGO.png">
        </div>
        <div class="sidebar">
            <div class="sidebar-division">
            <div class="sidebar-link">
                <img class="sidebar-icon" src="images/Icons/Home_icon.png">
                <a class="sidebar-link-text" href="main_page(home).html" target="_blank">HOME</a>
            </div>
            <div class="sidebar-link">
                <img class="sidebar-icon" src="images/Icons/List_icon.png">
                <a class="sidebar-link-text" href="List-of-Items_Page.html" target="_blank">LIST OF ITEMS</a>
            </div>
            <div class="sidebar-link">
                <img class="sidebar-icon" src="images/Icons/Profile_icon.png">
                <a class="sidebar-link-text" href="ProfilePage.html" target="_blank">PROFILE</a>
            </div>
            <div class="sidebar-link">
                <img class="sidebar-icon" src="images/Icons/Settings_icon.png">
                <a class="sidebar-link-text" href="MasterPage.html" target="_blank">APPROVAL LIST</a>
            </div>
            <div class="sidebar-link" style="margin-top: 110px;">
                <img class="sidebar-icon" src="images/Icons/Logout_icon.png">
                <a class="sidebar-link-text" href="https://www.youtube.com/watch?v=37uw4W2MwgU&list=RDLLW5a-vVZXg&index=4">LOGOUT</a>
            </div>
        </div>
    </section>

    <section class="right-section-database">
        <div class="databasePage-title">
            <p class="title-text">Database Manipulation</p>
        </div>
        <div>
            <p class="example-title-text">Example</p>
        </div>

        <div class="example-info-grid">
            <div class="top-info">
                <p>Images</p>
            </div>
            <div class="top-info">
                <p>Product Names</p>
            </div>
            <div class="top-info">
                <p>Product Info</p>
            </div>
            <div class="top-info">
                <p>Product Link</p>
            </div>
            <div class="top-info">
                <p>Availability</p>
            </div>
        </div>
        <div style="background-color: #F6F6F6;
                    border-radius: 15px;
                    margin-top: 0px;" class="example-info-grid">
            <div class="info-img-container">
                <img class="info-img" src="images/items-images/ArduiUno_img.jpg">
            </div>
            <div class="info-name-container">
                <p class="info-name">Arduino Uno Rev 3</p>
            </div>
            <div>
                <p class="info-text">
                    Introducing Arduino Uno, a versatile and user-friendly microcontroller board designed for both beginners and seasoned electronics enthusiasts. Packed with innovative features, the Arduino Uno serves as an ideal platform for developing interactive and creative projects. Its compact design houses an ATmega328P microcontroller, offering a seamless interface for programming and experimentation.
                </p>
                <p class="info-text">
                    With a generous array of digital and analog pins, this board allows for the connection of sensors, actuators, and other peripherals, facilitating limitless possibilities in project creation. The onboard USB interface simplifies the programming process, enabling users to upload code effortlessly. Whether you're delving into the world of electronics for the first time or pushing the boundaries of your technical expertise, the Arduino Uno provides a reliable foundation for turning ideas into reality. Explore the endless potential of this open-source platform and unleash your creativity in the exciting realm of DIY electronics.
                </p>
            </div>
            <div class="link">
                <p>https://docs.arduino.cc/hardware/uno-rev3/</p>
            </div>
            <div class="num">
                <p>5</p>
            </div>
        </div>
        <div style="background-color: #F6F6F6;
                    border-radius: 15px;
                    margin-top: 20px;" class="example-info-grid">
            <div class="info-img-container">
                <img class="info-img" src="images/items-images/ESP32-CAM.png">
            </div>
            <div class="info-name-container">
                <p class="info-name">ESP32-CAM</p>
            </div>
            <div>
                <p class="info-text">
                    The ESP32-CAM is a remarkable development board that integrates an ESP32-S module and a camera module, making it an ideal solution for projects requiring both wireless connectivity and image capture capabilities. The ESP32, produced by Espressif Systems, is a versatile microcontroller that combines Wi-Fi and Bluetooth connectivity with powerful processing capabilities, making it a popular choice for IoT applications. With the addition of a camera module, the ESP32-CAM enables developers to create projects such as surveillance cameras, video streaming devices, and even facial recognition systems
                </p>
                <p class="info-text">
                    One of the key features of the ESP32-CAM is its compact form factor, which allows it to be easily integrated into various projects with minimal space requirements. The camera module typically used with the ESP32-CAM is capable of capturing images with resolutions up to 2 megapixels, providing clear and detailed visuals for your applications. Moreover, the board supports microSD card storage, allowing you to save captured images or videos locally for later retrieval and analysis. Whether you're a hobbyist looking to experiment with IoT and image processing or a professional developer seeking to add visual capabilities to your projects, the ESP32-CAM offers a cost-effective and feature-rich solution.
                </p>
            </div>
            <div class="link">
                <p>https://lastminuteengineers.com/getting-started-with-esp32-cam/</p>
            </div>
            <div class="num">
                <p>2</p>
            </div>
        </div>

        <form action="includes/db-insertion.php" method="post">
            <div style="margin-top: 30px;" class="example-info-grid">
                <input type="file" accept="image/*" name="item-img" class="upload-img">
                <input type="text" class="item" name="item-name" placeholder="Product Name">
                <div>
                    <input type="text" class="item2"  name="product-info1" placeholder="Product Info 1st Paragraph">
                    <input type="text" class="item2" name="product-info2" placeholder="Product Info 2nd Paragraph">
                </div>
                <input type="text" name="product-link" placeholder="Product Link">
                <input type="text" class="item2" name="availability" placeholder="Availability">
            </div>
            <button type="submit">Submit</button>
        </form>
        <?php if(isset($message)) { echo "<p>$message</p>"; } ?>
    </section>
</body>
</html>
