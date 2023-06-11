<?php
    include 'koneksi.php';

    $query= "SELECT * FROM tb_fiqih;";
    $sql= mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RoadToJannah.Or.Id - dakwah gasan banua</title>
<link href='https://fonts.googleapis.com/css?family=Noto Sans Saurashtra' rel='stylesheet'>
<style>
    body {
        font-family: 'Noto Sans Saurashtra';
    }
    .body{
        width: 100%;
        height: 100%;
    }
    a:link {
        text-decoration: none;
    }
    /* =======Konten=============== */
    .konten{
        border-top: solid #47c200 3px;
        background-color: linen;
        margin-top: 50px;
        margin-left: 300px;
        padding-bottom: 450px;
        width: 900px;
        height: auto;
    }
    .judul{
        color: #4a7c12;
        padding-left: 400px;
    }
    .materi{
        border-radius: 5px;
        display: flex;
        color: black;
        margin-left: 30px;
        height: 60px;
        width: 850px;
        cursor: pointer;
        background-color: white;
    }
    .tanggal-materi{
        margin-left: 20px;
        font-weight: 800;
        opacity: 0.6;
    }
    .judul-materi{
        width: 630px;
        margin-left: 20px;
        font-weight:800;
    }
    .materi:hover{
        background-color: #4a7c12;
        color: white;
    }
    /* ====================== */

    /* =======header=============== */
    .header{
        background-color: #bdde98;
        padding-top: 10px;
        padding-left: 10px;
        padding-bottom: 10px;
    }
    .gambar{
        width: 250px;
        height: 50px;
    }
    .tanggal{
        background-color: #fffde7;;
        width: 100%;
        height: 60px;
    }
    .flex-ikon{
        padding-top: 10px;
        padding-left: 10px;
        padding-bottom: 10px;
        display: flex;
        gap: 20px;
    }
    .ikon{
        width: 35px;
        height: 35px;
        cursor: pointer;
        opacity: 0.6;
    }
    .flex-luar{
        display: flex;
    }
    .date{
        margin-left: 700px;
        opacity: 0.6;
    }
    .hnavbar{
        border-bottom: solid grey 1px;
        padding-left: 550px;
        display: flex;
        gap: 80px;
    }
    .ntulisan{
        color: #4a7c12;
        padding: 15px;
        margin-top: 0px;
        margin-bottom: 0px;
        cursor: pointer;
        font-weight: bolder;
    }
    .ntulisan:hover{
        opacity: 0.6;
        border-bottom: solid #47c200 1px;
        background-color: #A8F385;
    }
    /* ====================== */

    /* =======footer=============== */
    .footer{
        background-color: #bdde98;
        margin-top: 70px;
        width: 100%;
        height: 150px;
    }
    .judul-footer{
        font-weight: bold;
        display: flex;
        gap: 250px;
        padding-left: 85px;
        color: #4a7c12;
    }
    .isi-judul-footer{
        border-bottom: solid #4a7c12 2px;
        padding-bottom: 10px;
        width: 350px;
    }
    .isi-footer{
        display: flex;
        padding-left: 85px;
    }
    .isi-footer-konten-a{
        color: black;
        width: auto;
        cursor: pointer;
    }
    .isi-footer-konten-a:hover{
        opacity: 0.6;
    }
    .isi-footer-konten-b{
        color: black;
        margin-left: 470px;
        width: auto;
        cursor: pointer;
    }
    .isi-footer-konten-b:hover{
        opacity: 0.6;
    }
    .isi-footer-konten-c{
        color: black;
        margin-left: 400px;
        width: auto;
        cursor: pointer;
    }
    .isi-footer-konten-c:hover{
        opacity: 0.6;
    }
    /*=============================*/

</style>
</head>
<body>
    <div class="body">
        <div class="tanggal">
            <div class="flex-luar">
                <div class="flex-ikon">
                    <img src ="assets/img/fb.png" class="ikon" width="100%" height="100%">
                    <img src ="assets/img/ig.png" class="ikon" width="100%" height="100%">
                    <img src ="assets/img/yt.png" class="ikon" width="100%" height="100%">
                </div>
                <p class="date" id="date"></p>
            </div>
        </div>
        <div class="header">
            <div class="gambar">
                <img src ="assets/img/typo.png" width="100%" height="100%">
            </div>
        </div>
        <div class="hnavbar">
            <a href="dashboard - fiqih.php"><p class="ntulisan">Fiqih</p></a>
            <a href="dashboard - manhaj.php"><p class="ntulisan">Manhaj</p></a>
            <a href="dashboard - aqidah.php"><p class="ntulisan">Aqidah</p></a>
            <a href="dashboard - sejarah.php"><p class="ntulisan">Sejarah</p></a>
            <a href="tentang.php"><p class="ntulisan">Tentang Website</p></a>
        </div>
        <div class="konten">
            <h2 class="judul">Fiqih</h2>
            <?php
                while($result = mysqli_fetch_assoc($sql)){
            ?>
                <a href="<?php echo $result['url']; ?>">
                    <div class="materi">
                        <p class="judul-materi"><?php echo $result['judul']; ?></p>
                        <p class="tanggal-materi"><?php echo $result['tanggal']; ?></p>
                    </div>
                </a>
                <br>
            <?php
                }
            ?>
        </div>
        <div class="footer">
            <div class="judul-footer">
                <p class="isi-judul-footer">Siapa Kami</p>
                <p class="isi-judul-footer">Media Partner</p>
                <p class="isi-judul-footer">Road To Jannah</p>
            </div>
            <div class="isi-footer">
                <a href="tentang.php"><p class="isi-footer-konten-a">Tentang Website</p></a>
                <a href="https://pilkom.ulm.ac.id/"><p class="isi-footer-konten-b">Pendidikan Komputer FKIP</p></a>
                <a href="https://ulm.ac.id/id/"><p class="isi-footer-konten-c">Universitas Lambung Mangkurat</p></a>
            </div>
        </div>
    </div>
<script>
    /*===========TANGGAL==================*/
    var d = new Date();
    var month = d.getMonth() + 1;
    var date = d.getDate();
    var year = d.getFullYear();
    var fullDate = date + " - " + month + " - " + year;
    document.getElementById("date").innerHTML = fullDate;
    /*=============================*/
</script>
</body>
</html>
