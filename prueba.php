<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Timeline Chart</title>

    <style>


.container::before {
    content: '';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 3px ;
    height: 180vh;
    background-color: #ff1e26;
}

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 0 10rem;
}
.single {
    display: flex;
    align-items: center;
    justify-content: center;
    column-gap: 10rem;
    margin-top: 8rem;
}
.card {
    flex-basis: 50%;
    padding: 1rem 5rem 1rem 2rem;
    background-color: #ff1e26;
    color: #eaeaea;
    border-radius: .5rem;
    position: relative;
}
.right .card {
    padding: 1rem 2rem 1rem 5rem;
}
.card h2 {
    color: #fff;
    text-shadow: 0 0 .5rem rgba(255, 255, 255, .7);
}
.date { flex-basis: 50%; }
.card i {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    border: 2px solid #fff;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 1.3rem;
}
.left .card i { right: 25px; }

.card i .line {
    position: absolute;
    width: 27px;
    height: 2px;
    background-color: #eaeaea;
    right: 0;
    transform: translateX(100%);
}
.card i::after {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    background-color: #eaeaea;
    border: 2px solid #ff1e26;
    border-radius: 50%;
}
.left .card i::after {
    transform: translateX(100%);
    left: 111px;
}
.card::before {
    content: '';
    position: absolute;
    top: 50%;
    transform: translate(100%, -50%);
    width: 80px;
    height: 2px;
    background-color: #ff1e26;
    right: 0;
}
.date {
    color: #ff1e26;
    font-weight: 500;
    font-size: 1.2rem;
    margin-right: 25px;
}

.right .card {
    text-align: right;
}
.right .card i {
    left: 25px;
}
.right .card i .line {
    left: 0;
    transform: translateX(-100%);
}
.right .card i::after {
    transform: translateX(-100%);
    right: 111px;
}
.right .card::before {
    transform: translate(-100%, -50%);
    left: 0;
}
.right .date { text-align: right; }


    </style>


</head>
<body>
    <!-- SUBSCRIBE ==> https://www.youtube.com/channel/UCzWS-AiirxpTDq_AGSg9Fhg -->
    <!-- JOIN FACEBOOK GROUP ==> https://www.facebook.com/groups/html.css.javascript.alb -->

    <!-- SUBSCRIBE ==> https://www.youtube.com/channel/UCzWS-AiirxpTDq_AGSg9Fhg -->
    <!-- JOIN FACEBOOK GROUP ==> https://www.facebook.com/groups/html.css.javascript.alb -->
    <div class="container">
        <div class="single left">
            <div class="card">
                <h2>Some Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum amet autem aliquam laudantium est animi.</p>
                <i class="fa-brands fa-html5">
                    <div class="line"></div>
                </i>
            </div>
            <div class="date">Yesterday</div>
        </div>
        <div class="single right">
            <div class="date">2 Days Ago</div>
            <div class="card">
                <h2>Some Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum amet autem aliquam laudantium est animi.</p>
                <i class="fa-brands fa-css3">
                    <div class="line"></div>
                </i>
            </div>
        </div>
        <div class="single left">
            <div class="card">
                <h2>Some Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum amet autem aliquam laudantium est animi.</p>
                <i class="fa-brands fa-js">
                    <div class="line"></div>
                </i>
            </div>
            <div class="date">10 Days Ago</div>
        </div>
        <div class="single right">
            <div class="date">1 Month Ago</div>
            <div class="card">
                <h2>Some Title</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum amet autem aliquam laudantium est animi.</p>
                <i class="fa-brands fa-php">
                    <div class="line"></div>
                </i>
            </div>
        </div>
    </div>
    <!-- SUBSCRIBE ==> https://www.youtube.com/channel/UCzWS-AiirxpTDq_AGSg9Fhg -->
    <!-- JOIN FACEBOOK GROUP ==> https://www.facebook.com/groups/html.css.javascript.alb -->
    
    <!-- SUBSCRIBE ==> https://www.youtube.com/channel/UCzWS-AiirxpTDq_AGSg9Fhg -->
    <!-- JOIN FACEBOOK GROUP ==> https://www.facebook.com/groups/html.css.javascript.alb -->
</body>
</html>