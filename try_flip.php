<style type="text/css">
        body{
            overflow: hidden;
            background-size: 100% 100%;
        
        }
        #album{
            width: 600px;
            height: 500px;
            margin: 5% auto;
            background-color: rgb(212, 238, 253); 
            border-radius: 10px;
        }
        @media (max-width: 768px)  {
            #album{
            width: 370px;
            height: 800px;
            margin: 5% auto;
        }
        body{
            overflow: hidden;
            background-size: 100% 100%;
        }
        h1{
            background-color: rgb(212, 238, 253);
        }
            
        }
        h1{
            background-color: rgb(212, 238, 253);
        }
        
    </style>

    <div id="album">
        <div style="background-size: 100% 100%;"><h1>page d'acceuil</h1></div>
        <div style="background: url(images/books-media/list-view/book-media-02.jpg); background-size: cover;" >
        </div>
        <div style="background-size: cover;">
            <h1> la premiére page </h1>
        </div>
        <div style="background-size:cover;">
           <h1> la deuxiéme page</h1>
        </div>
        <div style="background-size: cover;">
            <h1>la troisiéme page</h1>
        </div>
        <div style="background-size: cover;">
           <h1> la quatriéme page </h1>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="turn.js"></script>
    <script>
        $('#album').turn({gradients: true, acceleration: true});
    </script>
</body>
</html>
