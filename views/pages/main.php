<div class="container">
    <div class="border-red"></div>
</div>
<br>
<div class="container">
    <div class="valen">
        <div class="row">
            <div class="col-5"></div>
            <div class="col-7">
                <h1>МТС Карьера</h1>
                <p>Уникальная переквалификация сотрудников
                    back-офиса в IT-специалистов</p><div class="button-danger">
                <button type="button" class="btn btn-danger btn-lg mx-auto">С чего начать?</button>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h1>Наставники</h1>
    </div>
</div>
<div class="container">
    <div class="sensei">
        <div class="row justify-content-around ">
            <div class="sensei-1 col-4 ">
                <img class="sensei-face-1"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_TNuj9iA1wZyI8kJaambQZeWLDjhywIGLezvqOdqwx2aJsIGEwg"
                    alt="">
                <p>ewiughieug<br>ewgeg</p>
            </div>
            <div class="sensei-2 col-4 "> <img class="sensei-face-1"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_TNuj9iA1wZyI8kJaambQZeWLDjhywIGLezvqOdqwx2aJsIGEwg"
                    alt="">

                <p>ewiughieug<br>ewgeg</p>
            </div>
            <div class="sensei-3 col-4 ">
                <img class="sensei-face-1"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_TNuj9iA1wZyI8kJaambQZeWLDjhywIGLezvqOdqwx2aJsIGEwg"
                    alt="">
                <p>ewiughieug<br>ewgeg</p>
            </div>
        </div>
    </div>
</div>
<div class="button-danger">
    <div class="container">
        <div class="row">
            <button type="button" class="btn btn-danger btn-lg mx-auto">С чего начать?</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h1>Каталог знаний</h1>
    </div>
</div>


<div class="container">
    <div class="education">
        <div class="row justify-content-around ">
            <div class="education-1 col-4 ">

            </div>
            <div class="education-2  col-4 ">
            </div>
            <div class="education-3  col-4 ">

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="border-red"></div>
</div>


<div class="container">
    <div class="site-footer">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="block">
                    <h2>О проекте</h2>
                    <a href="http://alltemplateneeds.com">Как это работает</a><br>
                    <a href="http://alltemplateneeds.com">Отзывы</a><br>
                    <a href="http://wallpaperswide.com">Контакты</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="block">
                    <h2>Ученику</h2>
                    <a href="http://wallpaperswide.com">Курсы</a><br>
                    <a href="http://wallpaperswide.com">Наставники</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="block">
                    <h2>Наставникам</h2>
                    <a href="http://wallpaperswide.com">Стать наставником</a>

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="block">
                    <h2>Поддержка</h2>
                    <a href="#"><i class="fw-icon-twitter "></i> Twitter</a><br>
                    <a href="#"><i class="fw-icon-facebook"></i> Facebook</a>
                </div>
            </div>
        </div>
    </div>
    <canvas id="myChart" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>