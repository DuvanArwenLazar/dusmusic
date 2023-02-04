<style>
    footer {
        display: flex;
        align-items: center;
        
        position: absolute;
        right: 0;
        top: 850px;
        width: 82.5%;
        height: 400px;
        
        background-color: #101010;
        color: #fff;
    }
    
    .text {
        display: flex;
        flex-direction: row;
        margin-left: 50px;
    }

    .f-item {
        margin-top: -130px;
        margin-right: 100px;
        min-width: 150px;
    }

    .f-item > p {
        margin-bottom: 15px;
        color: #909090;
    }

    .f-item > p > b { color: white; }

    .f-icons {
        display: flex;
        margin-left: 50px;
    }

    .f-icons > div {
        margin-right: 10px;
        background-color: #202020;
        width: 40px; 
        height: 40px; 
        border-radius: 50px;
        text-align: center;
    }

    .f-icons > div > img {
        position: relative;
        top: 11px;
    }

    .f-hr {
        width: 1px;
        height: 100%;
        transform: rotate(90deg);
    }

    
</style>
   
   <footer class="footer">
        <div class="text">
            <div class="f-item">
                <p><b> Compañia </b></p>
                <p> Acerca de </p>
                <p> Empleo </p>
                <p> For the Record </p>
            </div>
            <div class="f-item">
                <p><b> Comunidades </b></p>
                <p> Para artistas </p>
                <p> Desarrolladores </p>
                <p> Publicidad </p>
                <p> Inversiones </p>
                <p> Proveedores </p>
            </div>
            <div class="f-item">
                <p><b> Enlaces útiles </b></p>
                <p> Ayuda </p>
                <p> App móvil gratis </p>
            </div>
            <div class="f-item f-icons">
                <div class="instagram background">
                    <img src="./Public/Img/Icons/instagram.png" width="18px" alt="">
                </div>
                <div class="twitter background">
                    <img src="./Public/Img/Icons/twitter.png" width="18px" alt="">
                </div>
                <div class="facebook background">
                    <img src="./Public/Img/Icons/facebook.png" width="18px" alt="">
                </div>
            </div>
        </div>
    </footer>

    <!-- <script src="./Public/Ts/index.ts"></script> -->
    <script src="./Public/Js/index.js"></script>
</body>
</html>