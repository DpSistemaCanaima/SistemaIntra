<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: crimson;
        }
        .timeline{ 
            position: relative;
        }   
        .timeline{ 
            content: ''; 
            position: absolute;
            background: rgb(255, 255, 255); 
            width: 1px; 
            left: 50%;
        } 
        .child{            
            padding: 20px;            
            position: relative;
        }
        .child:nth-child(odd){
            float: left;
        }
        .child:nth-child(odd)::after{
            content: '';
            background-color: white;
            height: 1px;
            width: 20px;
            position: absolute;
            top: 30px;
            left: 0px;
        }
        .child:nth-child(odd)::before{
            content: '';
            position: absolute;
            background-color: rgb(255, 255, 255);            
            border-radius: 50%;
            width: 20px;
            height: 20px;
            left: -10px;
        }
        .child:nth-child(even)::before{
            content: '';
            position: absolute;
            background-color: rgb(255, 255, 255);            
            border-radius: 50%;
            width: 20px;
            height: 20px;
            right: -10px;            
        }
        .child:nth-child(even)::after{
            content: '';
            background-color: rgb(255, 255, 255);
            height: 1px;
            width: 20px;
            position: absolute;
            top: 30px;
            right: 0px;
        }
        .child:nth-child(even){
            float: right;
            text-align: right;
        }
        .content{
            width: 100px;
            padding: 20px;
            box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
            border-radius: 5px;
            background: white;
            /*background-color: rgba(255, 255, 255, .15);
            backdrop-filter: blur(5px);*/
            transition: all 1s;
            opacity: 0;
        }
        .visible {
            opacity: 1;
            transform: translate(0, 0);
        }
    </style>
    <script>
        window.addEventListener('scroll',e=>{            
            var item= document.querySelectorAll('.content')
            item.forEach(element => {
                if(element.getBoundingClientRect().top <  window.innerHeight){
                    element.classList.add('visible')
                }
            });
        })
    </script>
</head>
<body>
    <div class="timeline">
        <div class="parent">
            <div class="child">
                <div class="content">
                sequi molestias sed dolore iusto at eaque quas voluptas nobis. Rem adipisci ullam quia unde?
                </div>
            </div>
            <div class="child">
                <div class="content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, labore officia voluptates cupiditate, nam fugit 
                </div>
            </div>
            <div class="child">
                <div class="content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, labore officia voluptates cupiditate, nam fugit 
                </div>
            </div>
            <div class="child">
                <div class="content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, labore officia voluptates cupiditate, nam fugit 
                </div>
            </div>
            <div class="child">
                <div class="content">
                sequi molestias sed dolore iusto at eaque quas voluptas nobis. Rem adipisci ullam quia unde?
                </div>
            </div>
            <div class="child">
                <div class="content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, labore officia voluptates cupiditate, nam fugit 
                </div>
            </div>
            <div class="child">
                <div class="content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, labore officia voluptates cupiditate, nam fugit 
                </div>
            </div>
            <div class="child">
                <div class="content">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, labore officia voluptates cupiditate, nam fugit 
                </div>
            </div>
        </div>
    </div>
</body>
</html>