<html>
<head>
    <title>CV Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c2f2f2;
        }
        
        .logo {
            position: absolute;
            top: -25px;
            right:580px;
            width: 250px;
            height: 250px;
        }
        
        h1 {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 30px;
            color: #ffffff;
        }
        
        .image-selector {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }
        
        .image-selector img {
            width: 200px;
            height: 200px;
            margin: 0 10px;
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 8px;
            transition: border-color 0.3s;
        }
        
        .image-selector img.selected {
            border-color: #007bff;
        }
        
        .generate-button {
            display: flex;
            justify-content: center;
        }
        
        .generate-button button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #000000;
            border: none;
            color: white;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .generate-button button:hover {
            background-color: #046064;
        }
        
        .cv-container {
            max-width: 600px;
            margin: 200 auto;
            background-color: #06acc0;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .cv-container h2 {
            color: #007bff;
            margin-bottom: 20px;
        }
        
        .cv-container p {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <img src="<?php echo base_url(); ?>resources/images/logot.png" alt="Logo" class="logo">
    <div class="cv-container">
        <h1>Select the template</h1>
        
        
        <div class="image-selector">
            <img src="<?php echo base_url(); ?>resources/images/cv1.JPG" />
            <img src="<?php echo base_url(); ?>resources/images/cv2.JPG" />
        </div>
        
        
        
        
    </div>
	
    
</body>
</html>