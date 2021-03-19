<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title> Customer Profile </title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <script src="{{asset('assets/js/raphael.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <style>
        #stage-coins,
        #stage-man {
            width: 640px;
            height: 480px;
            margin: auto;

        }

        .stage {
            width: 100%;
            height: 100%;
            font-size: 50px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: flex-end;
        }

        .column {
            height: 100%;
            display: flex;
            flex-direction: column-reverse;
            flex-grow: 0;
        }

        .stacking {
            position: relative;
            height: 0.25em;
        }

        .stacking--tilt-l {
            left: -0.125em;
        }

        .stacking--tilt-r {
            left: 0.125em;
        }

        .fall {
            opacity: 0;
            animation: falling 1.65s ease-in forwards 1;
        }

        .coin {
            padding: 0 0.5em;
            width: 2.9em;
            height: 2.1em;
            transform: translateY(-100%);
        }

        .fall:nth-child(1) {
            animation-delay: 0.495s;
        }

        .fall:nth-child(2) {
            animation-delay: 0.99s;
        }

        .fall:nth-child(3) {
            animation-delay: 1.485s;
        }

        .fall:nth-child(4) {
            animation-delay: 1.98s;
        }

        .fall:nth-child(5) {
            animation-delay: 2.475s;
        }

        .fall:nth-child(6) {
            animation-delay: 2.97s;
        }

        .fall:nth-child(7) {
            animation-delay: 3.465s;
        }

        .fall:nth-child(8) {
            animation-delay: 3.96s;
        }

        .fall:nth-child(9) {
            animation-delay: 4.455s;
        }

        .fall:nth-child(10) {
            animation-delay: 4.95s;
        }

        .fall:nth-child(11) {
            animation-delay: 5.445s;
        }

        .fall:nth-child(12) {
            animation-delay: 5.94s;
        }

        .fall:nth-child(13) {
            animation-delay: 6.435s;
        }

        .fall:nth-child(14) {
            animation-delay: 6.93s;
        }

        .fall:nth-child(15) {
            animation-delay: 7.425s;
        }

        .mans {
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: wrap-reverse;
            justify-content: center;
        }

        .man {
            padding: 0 0.36em;
            width: 0.9em;
            height: 2.36em;
        }

        .appear {
            opacity: 0;
            animation: appear 1.65s ease-in forwards 1;
        }

        .appear:nth-child(1) {
            animation-delay: 0.2475s;
        }

        .appear:nth-child(2) {
            animation-delay: 0.495s;
        }

        .appear:nth-child(3) {
            animation-delay: 0.7425s;
        }

        .appear:nth-child(4) {
            animation-delay: 0.99s;
        }

        .appear:nth-child(5) {
            animation-delay: 1.2375s;
        }

        .appear:nth-child(6) {
            animation-delay: 1.485s;
        }

        .appear:nth-child(7) {
            animation-delay: 1.7325s;
        }

        .appear:nth-child(8) {
            animation-delay: 1.98s;
        }

        .appear:nth-child(9) {
            animation-delay: 2.2275s;
        }

        .appear:nth-child(10) {
            animation-delay: 2.475s;
        }

        .appear:nth-child(11) {
            animation-delay: 2.7225s;
        }

        .appear:nth-child(12) {
            animation-delay: 2.97s;
        }

        .appear:nth-child(13) {
            animation-delay: 3.2175s;
        }

        .appear:nth-child(14) {
            animation-delay: 3.465s;
        }

        .appear:nth-child(15) {
            animation-delay: 3.7125s;
        }

        .appear:nth-child(16) {
            animation-delay: 3.96s;
        }

        .appear:nth-child(17) {
            animation-delay: 4.2075s;
        }

        .appear:nth-child(18) {
            animation-delay: 4.455s;
        }

        .appear:nth-child(19) {
            animation-delay: 4.7025s;
        }

        .appear:nth-child(20) {
            animation-delay: 4.95s;
        }

        .appear:nth-child(21) {
            animation-delay: 5.1975s;
        }

        .appear:nth-child(22) {
            animation-delay: 5.445s;
        }

        .appear:nth-child(23) {
            animation-delay: 5.6925s;
        }

        .appear:nth-child(24) {
            animation-delay: 5.94s;
        }

        .appear:nth-child(25) {
            animation-delay: 6.1875s;
        }

        @keyframes falling {
            0% {
                transform: translatey(-350px);
                opacity: 0;
            }

            80% {
                transform: translatey(0);
                opacity: 1;
            }

            82% {
                transform: translatey(-2px);
                opacity: 1;
            }

            100% {
                transform: translatey(0);
                opacity: 1;
            }
        }

        @keyframes appear {
            0% {
                opacity: 0.3;
            }

            100% {
                opacity: 1;
            }
        }

    </style>
    <style>
        .Treant {
            position: relative;
            overflow: hidden;
            padding: 0 !important;
            margin: 0 auto !important;
        }

        .Treant>.node,
        .Treant>.pseudo {
            position: absolute;
            display: block;
            visibility: hidden;
        }

        .Treant.Treant-loaded .node,
        .Treant.Treant-loaded .pseudo {
            visibility: visible;
        }

        .Treant>.pseudo {
            width: 0;
            height: 0;
            border: none;
            padding: 0;
        }

        .Treant .collapse-switch {
            width: 3px;
            height: 3px;
            display: block;
            border: 1px solid rgb(196, 18, 18);
            position: absolute;
            top: 1px;
            right: 1px;
            cursor: pointer;
        }

        .Treant .collapsed .collapse-switch {
            background-color: #868DEE;

        }

        .Treant>.node img {
            border: none;
            float: none;
            text-align: center;
        }

        .Treant>.node {
            text-align: center;
        }

        body,
        div,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        pre,
        form,
        fieldset,
        input,
        textarea,
        p,
        blockquote,
        th,
        td {
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        fieldset,
        img {
            border: 0;
        }

        address,
        caption,
        cite,
        code,
        dfn,
        em,
        strong,
        th,
        var {
            font-style: normal;
            font-weight: normal;
        }

        caption,
        th {
            text-align: left;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: 100%;
            font-weight: normal;
        }

        q:before,
        q:after {
            content: '';
        }

        abbr,
        acronym {
            border: 0;
        }

        body {
            /* background: rgb(226, 197, 30); */
        }

        /* optional Container STYLES */
        .chart {
            height: 100%;
            margin: 5px;
            width: 100%;
            overflow: auto !important;


        }

        .Treant>.node {}

        .Treant>p {
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            font-weight: bold;
            font-size: 12px;
        }

        .node-name {
            font-weight: bold;
        }

        .nodeExample1 {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            background-color: #f2f2f2;
            /* border: 2px solid #fcb045; */
            height: 150px;
            width: 150px;
            border-radius: 50%;
            font-family: Tahoma;
            font-size: 12px;

            /* background: #008080; */
            color: #333;

            box-shadow: 0 0 5px green,
                0 0 15px green,
                0 0 20px green,
                0 0 50px green;

        }

        .node-name {
            padding-top: 20px;
            font-size: 20px;
        }


        .ProfileClass {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;

            height: 150px;
            width: 400px;

            font-family: Tahoma;
            font-size: 12px;
            background: #f2f2f2;
            color: #333;

            box-shadow: 0 0 5px green,
                0 0 15px green,
                0 0 20px green,
                0 0 50px green;
        }

        .ProfileClass-1 {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;

            height: 150px;
            width: 600px;

            font-family: Tahoma;
            font-size: 12px;
            background: yellow;
            color: #ffffff;

            box-shadow: 0 0 5px yellow,
                0 0 15px yellow,
                0 0 20px yellow,
                0 0 50px yellow;

        }

        .ProfileClass-2 {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;

            height: 150px;
            width: 600px;

            font-family: Tahoma;
            font-size: 12px;
            background: blue;
            color: #ffffff;

            box-shadow: 0 0 5px blue,
                0 0 15px blue,
                0 0 20px blue,
                0 0 50px blue;

        }

        .ProfileClass-3 {
            padding: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;

            height: 150px;
            width: 600px;

            font-family: Tahoma;
            font-size: 12px;

            background: orange;
            color: #ffffff;

            box-shadow: 0 0 5px orange,
                0 0 15px orange,
                0 0 20px orange,
                0 0 50px orange;

        }



        .nodeExample1 img {
            border-radius: 50%;
        }

        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background: linear-gradient(#141e30, #243b55); */
        }

        .login-box {
            background: linear-gradient(#141e30, #243b55);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
            padding: 40px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -25px;
            left: 0;
            color: #f1c40f;
            font-size: 12px;
        }

        .login-box form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #f1c40f;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
        }

        .login-box a:hover {
            background: #f1c40f;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #f1c40f,
                0 0 25px#f1c40f,
                0 0 50px #f1c40f,
                0 0 100px #f1c40f;
        }

        .login-box a span {
            position: absolute;
            display: block;
        }

        .login-box a span:nth-child(1) {
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #f1c40f);
            animation: btn-anim1 1s linear infinite;
        }

        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .login-box a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #f1c40f);
            animation: btn-anim2 1s linear infinite;
            animation-delay: .25s
        }

        @keyframes btn-anim2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .login-box a span:nth-child(3) {
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #f1c40f);
            animation: btn-anim3 1s linear infinite;
            animation-delay: .5s
        }

        @keyframes btn-anim3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }

        .login-box a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #f1c40f);
            animation: btn-anim4 1s linear infinite;
            animation-delay: .75s
        }

        @keyframes btn-anim4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }

        .myClass {
            /* background-color: #f48c03; */
            float: right;
            padding: 70px 10px;
            margin-top: -160px !important;
            width: 100px;
            color: gold;
            /* height: 300px; */
            border-radius: 10px;
            font-size: 30px;
            font-family: 'Nerko One', cursive;

        }

        .myClass-1 {
            float: left;
            margin-left: 0px;
            font-family: 'Nerko One', cursive;
            color: gold;
            /* background-color: #f48c03; */
            border-radius: 10px;

            width: 100px;
            margin-top: -160px !important;

            padding: 70px 10px;
            font-size: 30px;


        }

        path {
            stroke: #333;
            stroke-width: 3px;
        }

        .ProfileClass .node-name {
            font-size: 30px;

        }

        .myOwnNode-3 img {
            height: 80px;
            width: 80px;
            border-radius: 0% !important;
        }

        .node-coins {
            font-size: 20px;
            color: gold;
        }

        .myOwnNode-3 .node-title {
            /* margin-top: 10px; */
            font-size: 20px;
            color: gold;
        }

        .myFirstMainDiv {
            margin: 0 auto;
        }


        .tablesBox {
            color: #fff !important;
        }

        .tablesBox h5 {
            text-align: center;
        }

        th,
        td {
            text-align: center;
        }

    </style>
</head>

<label>Enter Refferel ID</label>
<input type="text" id="refID" onchange="getAllFriends()">


<body id="referBody">
    <audio id="sound" src="{{asset('assets/audio/new.mp3')}}"></audio>

    <!-- partial:index.partial.html -->
    <div style="display:flex;flex-basis:45%; justify-content: space-between; position: absolute;">
        <div>
            <h2>Coins</h2>
            <div id="stage-coins"></div>

            <div style="padding:40px;">
                <input type="text" style="display: none;" value="11" id="amount-coins" />
                <button style="display: none;"
                    onclick="moneyPile(parseInt(document.getElementById('amount-coins').value), document.getElementById('stage-coins'))">Again</button>
            </div>
        </div>

    </div>

    <div hidden>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 194 120">
            <symbol viewBox="0 0 194 120" id="icon-coin">
                <g>
                    <g>
                        <path fill="#00C800"
                            d="M188.5 43.2C185.4 23.3 145.6 7.6 97 7.6 46.4 7.6 5.3 24.7 5.3 45.7c0 0 0 20.3 0 28.6 0 21 41.1 38.1 91.7 38.1s91.7-17.1 91.7-38.1c0-9.2 0-31 0-31C188.6 43.3 188.6 43.3 188.5 43.2z" />
                    </g>
                </g>
                <path fill="none" stroke="#000000" stroke-width="0.5" stroke-miterlimit="10" d="M97 60" />
                <g>
                    <path
                        d="M87.8 35.1c0 1.1 0.5 2 1.6 2.7 0.9 0.6 2.4 1.2 4.6 1.9l0.8 0.2v-8.7l-0.7 0.1C89.9 31.7 87.8 33 87.8 35.1zM93.5 38.3c-1.6-0.5-2.8-1-3.5-1.5 -0.7-0.5-1-1-1-1.7 0-1.3 1.5-2.2 4.6-2.6V38.3z" />
                    <path
                        d="M112.9 44.4c-2.4-1.1-6.5-2.4-12.1-3.9v-8c4.6 0.3 9.2 1.1 13.5 2.4l0.4 0.1 4.9-8.3 -0.7-0.2c-5.3-1.6-11.4-2.6-18.1-2.9v-4.6h-7.3v4.8c-5.8 0.5-10.5 1.6-13.8 3.6 -3.6 2-5.4 4.6-5.4 7.8 0 3.1 1.3 5.6 3.9 7.6 2.5 1.9 6.8 3.7 12.8 5.4l2.6 0.7v8.5c-2.7-0.2-5.7-0.6-9.1-1.2 -3.6-0.7-6.7-1.5-9.2-2.3l-0.8-0.3v9.5l0.4 0.1c5.4 1.7 11.7 2.6 18.7 2.7v6.2h7.3v-6.4c5.9-0.4 10.7-1.6 14.1-3.6 3.6-2.1 5.5-4.9 5.5-8.4 0-2-0.6-3.7-1.9-5.2C117.3 46.8 115.4 45.5 112.9 44.4zM114.3 60.8c-3.3 1.9-8.1 3.1-14.1 3.5l-0.6 0v6.3h-4.9v-6.2l-0.6 0c-6.9-0.1-13.2-0.9-18.5-2.5V55c2.4 0.8 5.3 1.5 8.6 2.1 3.7 0.7 7 1.1 9.9 1.2l0.6 0V47.7l-3.4-0.9c-5.8-1.6-10-3.3-12.3-5.1 -2.3-1.8-3.4-3.9-3.4-6.7 0-2.7 1.6-4.9 4.8-6.7 3.3-1.9 8-3 13.9-3.4l0.6 0V20h4.9v4.6l0.6 0c6.5 0.2 12.4 1.1 17.6 2.6l-3.6 6.2c-4.5-1.3-9.2-2-13.9-2.3l-0.6 0v10.2l0.4 0.1c5.8 1.5 9.9 2.9 12.3 4 2.4 1.1 4.1 2.3 5.2 3.6 1.1 1.3 1.6 2.7 1.6 4.4C119.2 56.5 117.6 58.9 114.3 60.8z" />
                    <path
                        d="M105.2 51.2c-1-0.6-2.6-1.3-4.8-2L99.6 49v9.2l0.7-0.1c4.4-0.5 6.6-1.9 6.6-4.2C106.9 52.8 106.3 51.9 105.2 51.2zM100.8 56.9v-6.2c1.7 0.6 2.9 1.1 3.7 1.6 0.8 0.5 1.2 1 1.2 1.7C105.7 55.4 104.1 56.4 100.8 56.9z" />
                    <path
                        d="M97 7C46.1 7 4.7 24.4 4.7 45.7v28.6C4.7 95.6 46.1 113 97 113s92.3-17.4 92.3-38.7V45.7C189.3 24.4 147.9 7 97 7zM19 93.7C10.7 88 5.9 81.4 5.9 74.3V51.9c2 5.3 6.6 10.1 13.1 14.5V93.7zM28.5 99c-3.1-1.4-5.8-3-8.3-4.6V67.1c2.5 1.6 5.4 3.1 8.4 4.5L28.5 99zM188.1 74.3c0 20.7-40.9 37.5-91.1 37.5 -26.6 0-50.6-4.7-67.3-12.3l0.1-27.4C46.7 79.7 70.5 84.4 97 84.4c45.9 0 84-14.1 91.1-32.5V74.3zM97 83.2c-50.2 0-91.1-16.8-91.1-37.5S46.8 8.2 97 8.2s91.1 16.8 91.1 37.5S147.2 83.2 97 83.2z" />
                </g>
            </symbol>

            <symbol id="icon-man" viewBox="0 0 46 114">
                <path fill="#00C800" stroke="#000" stroke-miterlimit="10" stroke-width=".8"
                    d="M14 11a9 9 0 1 1 18 0 9 9 0 0 1-18 0zm30 23a11 11 0 0 0-10-11H12A11 11 0 0 0 2 34v28a4 4 0 0 0 8 0V37a1 1 0 0 1 2 0v70a5 5 0 0 0 10 0V67a1 1 0 0 1 2 0v40a5 5 0 0 0 10 0V37a1 1 0 0 1 2 0v25a4 4 0 0 0 8 0V34z" />
            </symbol>
        </svg>
    </div>
    <!-- partial -->
    <script src="./script.js"></script>
    <script>
        function moneyPile(amount, container, columnsCount) {
            columnsCount = columnsCount || 3;
            const tilts = ['l', 'r', 'none'];
            const columns = [];
            const coins = [];

            // Create column
            for (let c = 0; c < columnsCount; c++) {
                let col = document.createElement('div');
                col.classList.add('column');
                columns.push(col);
            }

            // Create coins
            for (let i = 0; i < amount; i++) {
                let coin = document.createElement('div');
                const tilt = Math.floor(Math.random() * 3);
                coin.classList.add('stacking', 'fall', `stacking--tilt-${tilts[tilt]}`);
                coin.innerHTML = '<svg class="coin"><use xlink:href="#icon-coin"></use></svg>';

                coins.push(coin);
            }



            for (let c in coins) {
                let coin = coins[c];
                let col = (c > (columnsCount - 1)) ? columns[Math.floor(Math.random() * 3)] : columns[c];
                col.appendChild(coin);
            }

            // Add columns to stage
            const stage = document.createElement('div');
            stage.classList.add('stage');
            for (let c in columns) {
                let column = columns[c];
                stage.appendChild(column);
            }

            // Put on screen
            container.innerHTML = '';
            container.appendChild(stage);
        }

        moneyPile(20, document.getElementById('stage-coins'));


        /*****************************
                Mans count 
         ****************************/
        function bodyCount(amount, container, columnsCount) {
            columnsCount = columnsCount || 1;
            const columns = [];
            const mans = [];

            // Create column
            for (let c = 0; c < columnsCount; c++) {
                let col = document.createElement('div');
                col.classList.add('column');
                columns.push(col);
            }

            // Create mans
            for (let i = 0; i < amount; i++) {
                let man = document.createElement('div');
                man.classList.add('appear');
                man.innerHTML = '<svg class="man"><use xlink:href="#icon-man"></use></svg>';

                mans.push(man);
            }

            let mwrapper = document.createElement('div');
            mwrapper.classList.add('mans');

            for (let m in mans) {
                let man = mans[m];
                mwrapper.appendChild(man);
            }

            let col = columns[0];
            col.appendChild(mwrapper);

            // Add columns to stage
            const stage = document.createElement('div');
            stage.classList.add('stage');
            for (let c in columns) {
                let column = columns[c];
                stage.appendChild(column);
            }

            // Put on screen
            container.innerHTML = '';
            container.appendChild(stage);
        }

        bodyCount(13, document.getElementById('stage-man'));

    </script>
    <div class="myFirstMainDiv">

        <div class="chart" id="basic-example">
        </div>

    </div>








    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: none;">

                <div class="container">



                    <div class="modal-body">
                        <div class="login-box">

                            <form>

                                <div class="user-box">
                                    <input type="text" name="" required="">
                                    <label>Friend Name</label>
                                </div>

                                <div class="user-box">
                                    <input type="tel" name="" required="">
                                    <label>Contact</label>
                                </div>


                                <a href="#" data-dismiss="modal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Submit
                                </a>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background: none;">

                <div class="container">


                    <div class="modal-body">
                        <div class="login-box tablesBox">
                            <h5 class="my-2">Coins You Get From Ahmed</h5>
                            <table style="width:100%;" class="table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Coins</th>
                                        <th>Status</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>24/11/2020</td>
                                        <td>150 Coins</td>
                                        <td>Received</td>
                                    </tr>
                                    <tr>
                                        <td>24/11/2020</td>
                                        <td>150 Coins</td>
                                        <td>Received</td>
                                    </tr>
                                    <tr>
                                        <td>24/11/2020</td>
                                        <td>150 Coins</td>
                                        <td>Received</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="{{asset('assets/js/raphael.js')}}"></script>

    <script>
        /*
         * Treant-js
         *
         * (c) 2013 Fran Peručić
         * Treant-js may be freely distributed under the MIT license.
         * For all details and documentation:
         * http://fperucic.github.io/treant-js
         *
         * Treant is an open-source JavaScipt library for visualization of tree diagrams.
         * It implements the node positioning algorithm of John Q. Walker II "Positioning nodes for General Trees".
         *
         * References:
         * Emilio Cortegoso Lobato: ECOTree.js v1.0 (October 26th, 2006)
         *
         * Contributors:
         * Fran Peručić, https://github.com/fperucic
         * Dave Goodchild, https://github.com/dlgoodchild
         */

        ;
        (function () {
            // Polyfill for IE to use startsWith
            if (!String.prototype.startsWith) {
                String.prototype.startsWith = function (searchString, position) {
                    return this.substr(position || 0, searchString.length) === searchString;
                };
            }

            var $ = null;

            var UTIL = {

                /**
                 * Directly updates, recursively/deeply, the first object with all properties in the second object
                 * @param {object} applyTo
                 * @param {object} applyFrom
                 * @return {object}
                 */
                inheritAttrs: function (applyTo, applyFrom) {
                    for (var attr in applyFrom) {
                        if (applyFrom.hasOwnProperty(attr)) {
                            if ((applyTo[attr] instanceof Object && applyFrom[attr] instanceof Object) && (
                                    typeof applyFrom[
                                        attr] !== 'function')) {
                                this.inheritAttrs(applyTo[attr], applyFrom[attr]);
                            } else {
                                applyTo[attr] = applyFrom[attr];
                            }
                        }
                    }
                    return applyTo;
                },

                /**
                 * Returns a new object by merging the two supplied objects
                 * @param {object} obj1
                 * @param {object} obj2
                 * @returns {object}
                 */
                createMerge: function (obj1, obj2) {
                    var newObj = {};
                    if (obj1) {
                        this.inheritAttrs(newObj, this.cloneObj(obj1));
                    }
                    if (obj2) {
                        this.inheritAttrs(newObj, obj2);
                    }
                    return newObj;
                },

                /**
                 * Takes any number of arguments
                 * @returns {*}
                 */
                extend: function () {
                    if ($) {
                        Array.prototype.unshift.apply(arguments, [true, {}]);
                        return $.extend.apply($, arguments);
                    } else {
                        return UTIL.createMerge.apply(this, arguments);
                    }
                },

                /**
                 * @param {object} obj
                 * @returns {*}
                 */
                cloneObj: function (obj) {
                    if (Object(obj) !== obj) {
                        return obj;
                    }
                    var res = new obj.constructor();
                    for (var key in obj) {
                        if (obj.hasOwnProperty(key)) {
                            res[key] = this.cloneObj(obj[key]);
                        }
                    }
                    return res;
                },

                /**
                 * @param {Element} el
                 * @param {string} eventType
                 * @param {function} handler
                 */
                addEvent: function (el, eventType, handler) {
                    if ($) {
                        $(el).on(eventType + '.treant', handler);
                    } else if (el.addEventListener) { // DOM Level 2 browsers
                        el.addEventListener(eventType, handler, false);
                    } else if (el.attachEvent) { // IE <= 8
                        el.attachEvent('on' + eventType, handler);
                    } else { // ancient browsers
                        el['on' + eventType] = handler;
                    }
                },

                /**
                 * @param {string} selector
                 * @param {boolean} raw
                 * @param {Element} parentEl
                 * @returns {Element|jQuery}
                 */
                findEl: function (selector, raw, parentEl) {
                    parentEl = parentEl || document;

                    if ($) {
                        var $element = $(selector, parentEl);
                        return (raw ? $element.get(0) : $element);
                    } else {
                        // todo: getElementsByName()
                        // todo: getElementsByTagName()
                        // todo: getElementsByTagNameNS()
                        if (selector.charAt(0) === '#') {
                            return parentEl.getElementById(selector.substring(1));
                        } else if (selector.charAt(0) === '.') {
                            var oElements = parentEl.getElementsByClassName(selector.substring(1));
                            return (oElements.length ? oElements[0] : null);
                        }

                        throw new Error('Unknown container element');
                    }
                },

                getOuterHeight: function (element) {
                    var nRoundingCompensation = 1;
                    if (typeof element.getBoundingClientRect === 'function') {
                        return element.getBoundingClientRect().height;
                    } else if ($) {
                        return Math.ceil($(element).outerHeight()) + nRoundingCompensation;
                    } else {
                        return Math.ceil(
                            element.clientHeight +
                            UTIL.getStyle(element, 'border-top-width', true) +
                            UTIL.getStyle(element, 'border-bottom-width', true) +
                            UTIL.getStyle(element, 'padding-top', true) +
                            UTIL.getStyle(element, 'padding-bottom', true) +
                            nRoundingCompensation
                        );
                    }
                },

                getOuterWidth: function (element) {
                    var nRoundingCompensation = 1;
                    if (typeof element.getBoundingClientRect === 'function') {
                        return element.getBoundingClientRect().width;
                    } else if ($) {
                        return Math.ceil($(element).outerWidth()) + nRoundingCompensation;
                    } else {
                        return Math.ceil(
                            element.clientWidth +
                            UTIL.getStyle(element, 'border-left-width', true) +
                            UTIL.getStyle(element, 'border-right-width', true) +
                            UTIL.getStyle(element, 'padding-left', true) +
                            UTIL.getStyle(element, 'padding-right', true) +
                            nRoundingCompensation
                        );
                    }
                },

                getStyle: function (element, strCssRule, asInt) {
                    var strValue = "";
                    if (document.defaultView && document.defaultView.getComputedStyle) {
                        strValue = document.defaultView.getComputedStyle(element, '').getPropertyValue(
                            strCssRule);
                    } else if (element.currentStyle) {
                        strCssRule = strCssRule.replace(/\-(\w)/g,
                            function (strMatch, p1) {
                                return p1.toUpperCase();
                            }
                        );
                        strValue = element.currentStyle[strCssRule];
                    }
                    //Number(elem.style.width.replace(/[^\d\.\-]/g, ''));
                    return (asInt ? parseFloat(strValue) : strValue);
                },

                addClass: function (element, cssClass) {
                    if ($) {
                        $(element).addClass(cssClass);
                    } else {
                        if (!UTIL.hasClass(element, cssClass)) {
                            if (element.classList) {
                                element.classList.add(cssClass);
                            } else {
                                element.className += " " + cssClass;
                            }
                        }
                    }
                },

                hasClass: function (element, my_class) {
                    return (" " + element.className + " ").replace(/[\n\t]/g, " ").indexOf(" " + my_class +
                        " ") > -1;
                },

                toggleClass: function (element, cls, apply) {
                    if ($) {
                        $(element).toggleClass(cls, apply);
                    } else {
                        if (apply) {
                            //element.className += " "+cls;
                            element.classList.add(cls);
                        } else {
                            element.classList.remove(cls);
                        }
                    }
                },

                setDimensions: function (element, width, height) {
                    if ($) {
                        $(element).width(width).height(height);
                    } else {
                        element.style.width = width + 'px';
                        element.style.height = height + 'px';
                    }
                },
                isjQueryAvailable: function () {
                    return (typeof ($) !== 'undefined' && $);
                },
            };

            /**
             * ImageLoader is used for determining if all the images from the Tree are loaded.
             * Node size (width, height) can be correctly determined only when all inner images are loaded
             */
            var ImageLoader = function () {
                this.reset();
            };

            ImageLoader.prototype = {

                /**
                 * @returns {ImageLoader}
                 */
                reset: function () {
                    this.loading = [];
                    return this;
                },

                /**
                 * @param {TreeNode} node
                 * @returns {ImageLoader}
                 */
                processNode: function (node) {
                    var aImages = node.nodeDOM.getElementsByTagName('img');

                    var i = aImages.length;
                    while (i--) {
                        this.create(node, aImages[i]);
                    }
                    return this;
                },

                /**
                 * @returns {ImageLoader}
                 */
                removeAll: function (img_src) {
                    var i = this.loading.length;
                    while (i--) {
                        if (this.loading[i] === img_src) {
                            this.loading.splice(i, 1);
                        }
                    }
                    return this;
                },

                /**
                 * @param {TreeNode} node
                 * @param {Element} image
                 * @returns {*}
                 */
                create: function (node, image) {
                    var self = this,
                        source = image.src;

                    function imgTrigger() {
                        self.removeAll(source);
                        node.width = node.nodeDOM.offsetWidth;
                        node.height = node.nodeDOM.offsetHeight;
                    }

                    if (image.src.indexOf('data:') !== 0) {
                        this.loading.push(source);

                        if (image.complete) {
                            return imgTrigger();
                        }

                        UTIL.addEvent(image, 'load', imgTrigger);
                        UTIL.addEvent(image, 'error', imgTrigger); // handle broken url-s

                        // load event is not fired for cached images, force the load event
                        image.src += ((image.src.indexOf('?') > 0) ? '&' : '?') + new Date().getTime();
                    } else {
                        imgTrigger();
                    }
                },

                /**
                 * @returns {boolean}
                 */
                isNotLoading: function () {
                    return (this.loading.length === 0);
                }
            };


            var TreeStore = {

                store: [],

                /**
                 * @param {object} jsonConfig
                 * @returns {Tree}
                 */
                createTree: function (jsonConfig) {
                    var nNewTreeId = this.store.length;
                    this.store.push(new Tree(jsonConfig, nNewTreeId));
                    return this.get(nNewTreeId);
                },

                /**
                 * @param {number} treeId
                 * @returns {Tree}
                 */
                get: function (treeId) {
                    return this.store[treeId];
                },

                /**
                 * @param {number} treeId
                 * @returns {TreeStore}
                 */
                destroy: function (treeId) {
                    var tree = this.get(treeId);
                    if (tree) {
                        tree._R.remove();
                        var draw_area = tree.drawArea;

                        while (draw_area.firstChild) {
                            draw_area.removeChild(draw_area.firstChild);
                        }

                        var classes = draw_area.className.split(' '),
                            classes_to_stay = [];

                        for (var i = 0; i < classes.length; i++) {
                            var cls = classes[i];
                            if (cls !== 'Treant' && cls !== 'Treant-loaded') {
                                classes_to_stay.push(cls);
                            }
                        }
                        draw_area.style.overflowY = '';
                        draw_area.style.overflowX = '';
                        draw_area.className = classes_to_stay.join(' ');

                        this.store[treeId] = null;
                    }
                    return this;
                }
            };

            /**
             * Tree constructor.
             * @param {object} jsonConfig
             * @param {number} treeId
             * @constructor
             */
            var Tree = function (jsonConfig, treeId) {

                /**
                 * @param {object} jsonConfig
                 * @param {number} treeId
                 * @returns {Tree}
                 */
                this.reset = function (jsonConfig, treeId) {
                    this.initJsonConfig = jsonConfig;
                    this.initTreeId = treeId;

                    this.id = treeId;

                    this.CONFIG = UTIL.extend(Tree.CONFIG, jsonConfig.chart);
                    this.drawArea = UTIL.findEl(this.CONFIG.container, true);
                    if (!this.drawArea) {
                        throw new Error('Failed to find element by selector "' + this.CONFIG.container +
                            '"');
                    }

                    UTIL.addClass(this.drawArea, 'Treant');

                    // kill of any child elements that may be there
                    this.drawArea.innerHTML = '';

                    this.imageLoader = new ImageLoader();

                    this.nodeDB = new NodeDB(jsonConfig.nodeStructure, this);

                    // key store for storing reference to node connectors,
                    // key = nodeId where the connector ends
                    this.connectionStore = {};

                    this.loaded = false;

                    this._R = new Raphael(this.drawArea, 100, 100);

                    return this;
                };

                /**
                 * @returns {Tree}
                 */
                this.reload = function () {
                    this.reset(this.initJsonConfig, this.initTreeId).redraw();
                    return this;
                };

                this.reset(jsonConfig, treeId);
            };

            Tree.prototype = {

                /**
                 * @returns {NodeDB}
                 */
                getNodeDb: function () {
                    return this.nodeDB;
                },

                /**
                 * @param {TreeNode} parentTreeNode
                 * @param {object} nodeDefinition
                 * @returns {TreeNode}
                 */
                addNode: function (parentTreeNode, nodeDefinition) {
                    var dbEntry = this.nodeDB.get(parentTreeNode.id);

                    this.CONFIG.callback.onBeforeAddNode.apply(this, [parentTreeNode, nodeDefinition]);

                    var oNewNode = this.nodeDB.createNode(nodeDefinition, parentTreeNode.id, this);
                    oNewNode.createGeometry(this);

                    oNewNode.parent().createSwitchGeometry(this);

                    this.positionTree();

                    this.CONFIG.callback.onAfterAddNode.apply(this, [oNewNode, parentTreeNode,
                        nodeDefinition
                    ]);

                    return oNewNode;
                },

                /**
                 * @returns {Tree}
                 */
                redraw: function () {
                    this.positionTree();
                    return this;
                },

                /**
                 * @param {function} callback
                 * @returns {Tree}
                 */
                positionTree: function (callback) {
                    var self = this;

                    if (this.imageLoader.isNotLoading()) {
                        var root = this.root(),
                            orient = this.CONFIG.rootOrientation;

                        this.resetLevelData();

                        this.firstWalk(root, 0);
                        this.secondWalk(root, 0, 0, 0);

                        this.positionNodes();

                        if (this.CONFIG.animateOnInit) {
                            setTimeout(
                                function () {
                                    root.toggleCollapse();
                                },
                                this.CONFIG.animateOnInitDelay
                            );
                        }

                        if (!this.loaded) {
                            UTIL.addClass(this.drawArea,
                                'Treant-loaded'); // nodes are hidden until .loaded class is added
                            if (Object.prototype.toString.call(callback) === "[object Function]") {
                                callback(self);
                            }
                            self.CONFIG.callback.onTreeLoaded.apply(self, [root]);
                            this.loaded = true;
                        }

                    } else {
                        setTimeout(
                            function () {
                                self.positionTree(callback);
                            }, 10
                        );
                    }
                    return this;
                },

                /**
                 * In a first post-order walk, every node of the tree is assigned a preliminary
                 * x-coordinate (held in field node->prelim).
                 * In addition, internal nodes are given modifiers, which will be used to move their
                 * children to the right (held in field node->modifier).
                 * @param {TreeNode} node
                 * @param {number} level
                 * @returns {Tree}
                 */
                firstWalk: function (node, level) {
                    node.prelim = null;
                    node.modifier = null;

                    this.setNeighbors(node, level);
                    this.calcLevelDim(node, level);

                    var leftSibling = node.leftSibling();

                    if (node.childrenCount() === 0 || level == this.CONFIG.maxDepth) {
                        // set preliminary x-coordinate
                        if (leftSibling) {
                            node.prelim = leftSibling.prelim + leftSibling.size() + this.CONFIG
                                .siblingSeparation;
                        } else {
                            node.prelim = 0;
                        }
                    } else {
                        //node is not a leaf,  firstWalk for each child
                        for (var i = 0, n = node.childrenCount(); i < n; i++) {
                            this.firstWalk(node.childAt(i), level + 1);
                        }

                        var midPoint = node.childrenCenter() - node.size() / 2;

                        if (leftSibling) {
                            node.prelim = leftSibling.prelim + leftSibling.size() + this.CONFIG
                                .siblingSeparation;
                            node.modifier = node.prelim - midPoint;
                            this.apportion(node, level);
                        } else {
                            node.prelim = midPoint;
                        }

                        // handle stacked children positioning
                        if (node.stackParent) { // handle the parent of stacked children
                            node.modifier += this.nodeDB.get(node.stackChildren[0]).size() / 2 + node
                                .connStyle.stackIndent;
                        } else if (node.stackParentId) { // handle stacked children
                            node.prelim = 0;
                        }
                    }
                    return this;
                },

                /*
                 * Clean up the positioning of small sibling subtrees.
                 * Subtrees of a node are formed independently and
                 * placed as close together as possible. By requiring
                 * that the subtrees be rigid at the time they are put
                 * together, we avoid the undesirable effects that can
                 * accrue from positioning nodes rather than subtrees.
                 */
                apportion: function (node, level) {
                    var firstChild = node.firstChild(),
                        firstChildLeftNeighbor = firstChild.leftNeighbor(),
                        compareDepth = 1,
                        depthToStop = this.CONFIG.maxDepth - level;

                    while (firstChild && firstChildLeftNeighbor && compareDepth <= depthToStop) {
                        // calculate the position of the firstChild, according to the position of firstChildLeftNeighbor

                        var modifierSumRight = 0,
                            modifierSumLeft = 0,
                            leftAncestor = firstChildLeftNeighbor,
                            rightAncestor = firstChild;

                        for (var i = 0; i < compareDepth; i++) {
                            leftAncestor = leftAncestor.parent();
                            rightAncestor = rightAncestor.parent();
                            modifierSumLeft += leftAncestor.modifier;
                            modifierSumRight += rightAncestor.modifier;

                            // all the stacked children are oriented towards right so use right variables
                            if (rightAncestor.stackParent !== undefined) {
                                modifierSumRight += rightAncestor.size() / 2;
                            }
                        }

                        // find the gap between two trees and apply it to subTrees
                        // and mathing smaller gaps to smaller subtrees

                        var totalGap = (firstChildLeftNeighbor.prelim + modifierSumLeft +
                            firstChildLeftNeighbor.size() + this
                            .CONFIG.subTeeSeparation) - (firstChild.prelim + modifierSumRight);

                        if (totalGap > 0) {
                            var subtreeAux = node,
                                numSubtrees = 0;

                            // count all the subtrees in the LeftSibling
                            while (subtreeAux && subtreeAux.id !== leftAncestor.id) {
                                subtreeAux = subtreeAux.leftSibling();
                                numSubtrees++;
                            }

                            if (subtreeAux) {
                                var subtreeMoveAux = node,
                                    singleGap = totalGap / numSubtrees;

                                while (subtreeMoveAux.id !== leftAncestor.id) {
                                    subtreeMoveAux.prelim += totalGap;
                                    subtreeMoveAux.modifier += totalGap;

                                    totalGap -= singleGap;
                                    subtreeMoveAux = subtreeMoveAux.leftSibling();
                                }
                            }
                        }

                        compareDepth++;

                        firstChild = (firstChild.childrenCount() === 0) ?
                            node.leftMost(0, compareDepth) :
                            firstChild = firstChild.firstChild();

                        if (firstChild) {
                            firstChildLeftNeighbor = firstChild.leftNeighbor();
                        }
                    }
                },


                secondWalk: function (node, level, X, Y) {
                    if (level <= this.CONFIG.maxDepth) {
                        var xTmp = node.prelim + X,
                            yTmp = Y,
                            align = this.CONFIG.nodeAlign,
                            orient = this.CONFIG.rootOrientation,
                            levelHeight, nodesizeTmp;

                        if (orient === 'NORTH' || orient === 'SOUTH') {
                            levelHeight = this.levelMaxDim[level].height;
                            nodesizeTmp = node.height;
                            if (node.pseudo) {
                                node.height = levelHeight;
                            } // assign a new size to pseudo nodes
                        } else if (orient === 'WEST' || orient === 'EAST') {
                            levelHeight = this.levelMaxDim[level].width;
                            nodesizeTmp = node.width;
                            if (node.pseudo) {
                                node.width = levelHeight;
                            } // assign a new size to pseudo nodes
                        }

                        node.X = xTmp;

                        if (node
                            .pseudo
                        ) { // pseudo nodes need to be properly aligned, otherwise position is not correct in some examples
                            if (orient === 'NORTH' || orient === 'WEST') {
                                node.Y = yTmp; // align "BOTTOM"
                            } else if (orient === 'SOUTH' || orient === 'EAST') {
                                node.Y = (yTmp + (levelHeight - nodesizeTmp)); // align "TOP"
                            }

                        } else {
                            node.Y = (align === 'CENTER') ? (yTmp + (levelHeight - nodesizeTmp) / 2) :
                                (align === 'TOP') ? (yTmp + (levelHeight - nodesizeTmp)) :
                                yTmp;
                        }

                        if (orient === 'WEST' || orient === 'EAST') {
                            var swapTmp = node.X;
                            node.X = node.Y;
                            node.Y = swapTmp;
                        }

                        if (orient === 'SOUTH') {
                            node.Y = -node.Y - nodesizeTmp;
                        } else if (orient === 'EAST') {
                            node.X = -node.X - nodesizeTmp;
                        }

                        if (node.childrenCount() !== 0) {
                            if (node.id === 0 && this.CONFIG.hideRootNode) {
                                // ako je root node Hiden onda nemoj njegovu dijecu pomaknut po Y osi za Level separation, neka ona budu na vrhu
                                this.secondWalk(node.firstChild(), level + 1, X + node.modifier, Y);
                            } else {
                                this.secondWalk(node.firstChild(), level + 1, X + node.modifier, Y +
                                    levelHeight + this.CONFIG
                                    .levelSeparation);
                            }
                        }

                        if (node.rightSibling()) {
                            this.secondWalk(node.rightSibling(), level, X, Y);
                        }
                    }
                },

                /**
                 * position all the nodes, center the tree in center of its container
                 * 0,0 coordinate is in the upper left corner
                 * @returns {Tree}
                 */
                positionNodes: function () {
                    var self = this,
                        treeSize = {
                            x: self.nodeDB.getMinMaxCoord('X', null, null),
                            y: self.nodeDB.getMinMaxCoord('Y', null, null)
                        },

                        treeWidth = treeSize.x.max - treeSize.x.min,
                        treeHeight = treeSize.y.max - treeSize.y.min,

                        treeCenter = {
                            x: treeSize.x.max - treeWidth / 2,
                            y: treeSize.y.max - treeHeight / 2
                        };

                    this.handleOverflow(treeWidth, treeHeight);

                    var
                        containerCenter = {
                            x: self.drawArea.clientWidth / 2,
                            y: self.drawArea.clientHeight / 2
                        },

                        deltaX = containerCenter.x - treeCenter.x,
                        deltaY = containerCenter.y - treeCenter.y,

                        // all nodes must have positive X or Y coordinates, handle this with offsets
                        negOffsetX = ((treeSize.x.min + deltaX) <= 0) ? Math.abs(treeSize.x.min) : 0,
                        negOffsetY = ((treeSize.y.min + deltaY) <= 0) ? Math.abs(treeSize.y.min) : 0,
                        i, len, node;

                    // position all the nodes
                    for (i = 0, len = this.nodeDB.db.length; i < len; i++) {

                        node = this.nodeDB.get(i);

                        self.CONFIG.callback.onBeforePositionNode.apply(self, [node, i, containerCenter,
                            treeCenter
                        ]);

                        if (node.id === 0 && this.CONFIG.hideRootNode) {
                            self.CONFIG.callback.onAfterPositionNode.apply(self, [node, i, containerCenter,
                                treeCenter
                            ]);
                            continue;
                        }

                        // if the tree is smaller than the draw area, then center the tree within drawing area
                        node.X += negOffsetX + ((treeWidth < this.drawArea.clientWidth) ? deltaX : this
                            .CONFIG.padding);
                        node.Y += negOffsetY + ((treeHeight < this.drawArea.clientHeight) ? deltaY : this
                            .CONFIG.padding);

                        var collapsedParent = node.collapsedParent(),
                            hidePoint = null;

                        if (collapsedParent) {
                            // position the node behind the connector point of the parent, so future animations can be visible
                            hidePoint = collapsedParent.connectorPoint(true);
                            node.hide(hidePoint);

                        } else if (node.positioned) {
                            // node is already positioned,
                            node.show();
                        } else { // inicijalno stvaranje nodeova, postavi lokaciju
                            node.nodeDOM.style.left = node.X + 'px';
                            node.nodeDOM.style.top = node.Y + 'px';
                            node.positioned = true;
                        }

                        if (node.id !== 0 && !(node.parent().id === 0 && this.CONFIG.hideRootNode)) {
                            this.setConnectionToParent(node, hidePoint); // skip the root node
                        } else if (!this.CONFIG.hideRootNode && node.drawLineThrough) {
                            // drawlinethrough is performed for for the root node also
                            node.drawLineThroughMe();
                        }

                        self.CONFIG.callback.onAfterPositionNode.apply(self, [node, i, containerCenter,
                            treeCenter
                        ]);
                    }
                    return this;
                },

                /**
                 * Create Raphael instance, (optionally set scroll bars if necessary)
                 * @param {number} treeWidth
                 * @param {number} treeHeight
                 * @returns {Tree}
                 */
                handleOverflow: function (treeWidth, treeHeight) {
                    var viewWidth = (treeWidth < this.drawArea.clientWidth) ? this.drawArea.clientWidth :
                        treeWidth + this
                        .CONFIG.padding * 2,
                        viewHeight = (treeHeight < this.drawArea.clientHeight) ? this.drawArea
                        .clientHeight : treeHeight +
                        this.CONFIG.padding * 2;

                    this._R.setSize(viewWidth, viewHeight);

                    if (this.CONFIG.scrollbar === 'resize') {
                        UTIL.setDimensions(this.drawArea, viewWidth, viewHeight);
                    } else if (!UTIL.isjQueryAvailable() || this.CONFIG.scrollbar === 'native') {

                        if (this.drawArea.clientWidth < treeWidth) { // is overflow-x necessary
                            this.drawArea.style.overflowX = "auto";
                        }

                        if (this.drawArea.clientHeight < treeHeight) { // is overflow-y necessary
                            this.drawArea.style.overflowY = "auto";
                        }
                    }
                    // Fancy scrollbar relies heavily on jQuery, so guarding with if ( $ )
                    else if (this.CONFIG.scrollbar === 'fancy') {
                        var jq_drawArea = $(this.drawArea);
                        if (jq_drawArea.hasClass(
                                'ps-container')) { // znaci da je 'fancy' vec inicijaliziran, treba updateat
                            jq_drawArea.find('.Treant').css({
                                width: viewWidth,
                                height: viewHeight
                            });

                            jq_drawArea.perfectScrollbar('update');
                        } else {
                            var mainContainer = jq_drawArea.wrapInner('<div class="Treant"/>'),
                                child = mainContainer.find('.Treant');

                            child.css({
                                width: viewWidth,
                                height: viewHeight
                            });

                            mainContainer.perfectScrollbar();
                        }
                    } // else this.CONFIG.scrollbar == 'None'

                    return this;
                },
                /**
                 * @param {TreeNode} treeNode
                 * @param {boolean} hidePoint
                 * @returns {Tree}
                 */
                setConnectionToParent: function (treeNode, hidePoint) {
                    var stacked = treeNode.stackParentId,
                        connLine,
                        parent = (stacked ? this.nodeDB.get(stacked) : treeNode.parent()),

                        pathString = hidePoint ?
                        this.getPointPathString(hidePoint) :
                        this.getPathString(parent, treeNode, stacked);

                    if (this.connectionStore[treeNode.id]) {
                        // connector already exists, update the connector geometry
                        connLine = this.connectionStore[treeNode.id];
                        this.animatePath(connLine, pathString);
                    } else {
                        connLine = this._R.path(pathString);
                        this.connectionStore[treeNode.id] = connLine;

                        // don't show connector arrows por pseudo nodes
                        if (treeNode.pseudo) {
                            delete parent.connStyle.style['arrow-end'];
                        }
                        if (parent.pseudo) {
                            delete parent.connStyle.style['arrow-start'];
                        }

                        connLine.attr(parent.connStyle.style);

                        if (treeNode.drawLineThrough || treeNode.pseudo) {
                            treeNode.drawLineThroughMe(hidePoint);
                        }
                    }
                    treeNode.connector = connLine;
                    return this;
                },

                /**
                 * Create the path which is represented as a point, used for hiding the connection
                 * A path with a leading "_" indicates the path will be hidden
                 * See: http://dmitrybaranovskiy.github.io/raphael/reference.html#Paper.path
                 * @param {object} hidePoint
                 * @returns {string}
                 */
                getPointPathString: function (hidePoint) {
                    return ["_M", hidePoint.x, ",", hidePoint.y, 'L', hidePoint.x, ",", hidePoint.y,
                        hidePoint.x, ",",
                        hidePoint.y
                    ].join(' ');
                },

                /**
                 * This method relied on receiving a valid Raphael Paper.path.
                 * See: http://dmitrybaranovskiy.github.io/raphael/reference.html#Paper.path
                 * A pathString is typically in the format of "M10,20L30,40"
                 * @param path
                 * @param {string} pathString
                 * @returns {Tree}
                 */
                animatePath: function (path, pathString) {
                    if (path.hidden && pathString.charAt(0) !== "_") { // path will be shown, so show it
                        path.show();
                        path.hidden = false;
                    }

                    // See: http://dmitrybaranovskiy.github.io/raphael/reference.html#Element.animate
                    path.animate({
                            path: pathString.charAt(0) === "_" ?
                                pathString.substring(1) :
                                pathString // remove the "_" prefix if it exists
                        },
                        this.CONFIG.animation.connectorsSpeed,
                        this.CONFIG.animation.connectorsAnimation,
                        function () {
                            if (pathString.charAt(0) ===
                                "_") { // animation is hiding the path, hide it at the and of animation
                                path.hide();
                                path.hidden = true;
                            }
                        }
                    );
                    return this;
                },

                /**
                 *
                 * @param {TreeNode} from_node
                 * @param {TreeNode} to_node
                 * @param {boolean} stacked
                 * @returns {string}
                 */
                getPathString: function (from_node, to_node, stacked) {
                    var startPoint = from_node.connectorPoint(true),
                        endPoint = to_node.connectorPoint(false),
                        orientation = this.CONFIG.rootOrientation,
                        connType = from_node.connStyle.type,
                        P1 = {},
                        P2 = {};

                    if (orientation === 'NORTH' || orientation === 'SOUTH') {
                        P1.y = P2.y = (startPoint.y + endPoint.y) / 2;

                        P1.x = startPoint.x;
                        P2.x = endPoint.x;
                    } else if (orientation === 'EAST' || orientation === 'WEST') {
                        P1.x = P2.x = (startPoint.x + endPoint.x) / 2;

                        P1.y = startPoint.y;
                        P2.y = endPoint.y;
                    }

                    // sp, p1, pm, p2, ep == "x,y"
                    var sp = startPoint.x + ',' + startPoint.y,
                        p1 = P1.x + ',' + P1.y,
                        p2 = P2.x + ',' + P2.y,
                        ep = endPoint.x + ',' + endPoint.y,
                        pm = (P1.x + P2.x) / 2 + ',' + (P1.y + P2.y) / 2,
                        pathString, stackPoint;

                    if (stacked) { // STACKED CHILDREN

                        stackPoint = (orientation === 'EAST' || orientation === 'WEST') ?
                            endPoint.x + ',' + startPoint.y :
                            startPoint.x + ',' + endPoint.y;

                        if (connType === "step" || connType === "straight") {
                            pathString = ["M", sp, 'L', stackPoint, 'L', ep];
                        } else if (connType === "curve" || connType === "bCurve") {
                            var helpPoint, // used for nicer curve lines
                                indent = from_node.connStyle.stackIndent;

                            if (orientation === 'NORTH') {
                                helpPoint = (endPoint.x - indent) + ',' + (endPoint.y - indent);
                            } else if (orientation === 'SOUTH') {
                                helpPoint = (endPoint.x - indent) + ',' + (endPoint.y + indent);
                            } else if (orientation === 'EAST') {
                                helpPoint = (endPoint.x + indent) + ',' + startPoint.y;
                            } else if (orientation === 'WEST') {
                                helpPoint = (endPoint.x - indent) + ',' + startPoint.y;
                            }
                            pathString = ["M", sp, 'L', helpPoint, 'S', stackPoint, ep];
                        }

                    } else { // NORMAL CHILDREN
                        if (connType === "step") {
                            pathString = ["M", sp, 'L', p1, 'L', p2, 'L', ep];
                        } else if (connType === "curve") {
                            pathString = ["M", sp, 'C', p1, p2, ep];
                        } else if (connType === "bCurve") {
                            pathString = ["M", sp, 'Q', p1, pm, 'T', ep];
                        } else if (connType === "straight") {
                            pathString = ["M", sp, 'L', sp, ep];
                        }
                    }

                    return pathString.join(" ");
                },

                /**
                 * Algorithm works from left to right, so previous processed node will be left neighbour of the next node
                 * @param {TreeNode} node
                 * @param {number} level
                 * @returns {Tree}
                 */
                setNeighbors: function (node, level) {
                    node.leftNeighborId = this.lastNodeOnLevel[level];
                    if (node.leftNeighborId) {
                        node.leftNeighbor().rightNeighborId = node.id;
                    }
                    this.lastNodeOnLevel[level] = node.id;
                    return this;
                },

                /**
                 * Used for calculation of height and width of a level (level dimensions)
                 * @param {TreeNode} node
                 * @param {number} level
                 * @returns {Tree}
                 */
                calcLevelDim: function (node, level) { // root node is on level 0
                    this.levelMaxDim[level] = {
                        width: Math.max(this.levelMaxDim[level] ? this.levelMaxDim[level].width : 0,
                            node.width),
                        height: Math.max(this.levelMaxDim[level] ? this.levelMaxDim[level].height : 0,
                            node.height)
                    };
                    return this;
                },

                /**
                 * @returns {Tree}
                 */
                resetLevelData: function () {
                    this.lastNodeOnLevel = [];
                    this.levelMaxDim = [];
                    return this;
                },

                /**
                 * @returns {TreeNode}
                 */
                root: function () {
                    return this.nodeDB.get(0);
                }
            };

            /**
             * NodeDB is used for storing the nodes. Each tree has its own NodeDB.
             * @param {object} nodeStructure
             * @param {Tree} tree
             * @constructor
             */
            var NodeDB = function (nodeStructure, tree) {
                this.reset(nodeStructure, tree);
            };

            NodeDB.prototype = {

                /**
                 * @param {object} nodeStructure
                 * @param {Tree} tree
                 * @returns {NodeDB}
                 */
                reset: function (nodeStructure, tree) {

                    this.db = [];

                    var self = this;

                    /**
                     * @param {object} node
                     * @param {number} parentId
                     */
                    function iterateChildren(node, parentId) {
                        var newNode = self.createNode(node, parentId, tree, null);

                        if (node.children) {
                            // pseudo node is used for descending children to the next level
                            if (node.childrenDropLevel && node.childrenDropLevel > 0) {
                                while (node.childrenDropLevel--) {
                                    // pseudo node needs to inherit the connection style from its parent for continuous connectors
                                    var connStyle = UTIL.cloneObj(newNode.connStyle);
                                    newNode = self.createNode('pseudo', newNode.id, tree, null);
                                    newNode.connStyle = connStyle;
                                    newNode.children = [];
                                }
                            }

                            var stack = (node.stackChildren && !self.hasGrandChildren(node)) ? newNode.id :
                                null;

                            // children are positioned on separate levels, one beneath the other
                            if (stack !== null) {
                                newNode.stackChildren = [];
                            }

                            for (var i = 0, len = node.children.length; i < len; i++) {
                                if (stack !== null) {
                                    newNode = self.createNode(node.children[i], newNode.id, tree, stack);
                                    if ((i + 1) < len) {
                                        // last node cant have children
                                        newNode.children = [];
                                    }
                                } else {
                                    iterateChildren(node.children[i], newNode.id);
                                }
                            }
                        }
                    }

                    if (tree.CONFIG.animateOnInit) {
                        nodeStructure.collapsed = true;
                    }

                    iterateChildren(nodeStructure, -1); // root node

                    this.createGeometries(tree);

                    return this;
                },

                /**
                 * @param {Tree} tree
                 * @returns {NodeDB}
                 */
                createGeometries: function (tree) {
                    var i = this.db.length;

                    while (i--) {
                        this.get(i).createGeometry(tree);
                    }
                    return this;
                },

                /**
                 * @param {number} nodeId
                 * @returns {TreeNode}
                 */
                get: function (nodeId) {
                    return this.db[nodeId]; // get TreeNode by ID
                },

                /**
                 * @param {function} callback
                 * @returns {NodeDB}
                 */
                walk: function (callback) {
                    var i = this.db.length;

                    while (i--) {
                        callback.apply(this, [this.get(i)]);
                    }
                    return this;
                },

                /**
                 *
                 * @param {object} nodeStructure
                 * @param {number} parentId
                 * @param {Tree} tree
                 * @param {number} stackParentId
                 * @returns {TreeNode}
                 */
                createNode: function (nodeStructure, parentId, tree, stackParentId) {
                    var node = new TreeNode(nodeStructure, this.db.length, parentId, tree, stackParentId);

                    this.db.push(node);

                    // skip root node (0)
                    if (parentId >= 0) {
                        var parent = this.get(parentId);

                        // todo: refactor into separate private method
                        if (nodeStructure.position) {
                            if (nodeStructure.position === 'left') {
                                parent.children.push(node.id);
                            } else if (nodeStructure.position === 'right') {
                                parent.children.splice(0, 0, node.id);
                            } else if (nodeStructure.position === 'center') {
                                parent.children.splice(Math.floor(parent.children.length / 2), 0, node.id);
                            } else {
                                // edge case when there's only 1 child
                                var position = parseInt(nodeStructure.position);
                                if (parent.children.length === 1 && position > 0) {
                                    parent.children.splice(0, 0, node.id);
                                } else {
                                    parent.children.splice(
                                        Math.max(position, parent.children.length - 1),
                                        0, node.id
                                    );
                                }
                            }
                        } else {
                            parent.children.push(node.id);
                        }
                    }

                    if (stackParentId) {
                        this.get(stackParentId).stackParent = true;
                        this.get(stackParentId).stackChildren.push(node.id);
                    }

                    return node;
                },

                getMinMaxCoord: function (dim, parent,
                    MinMax) { // used for getting the dimensions of the tree, dim = 'X' || 'Y'
                    // looks for min and max (X and Y) within the set of nodes
                    parent = parent || this.get(0);

                    MinMax = MinMax || { // start with root node dimensions
                        min: parent[dim],
                        max: parent[dim] + ((dim === 'X') ? parent.width : parent.height)
                    };

                    var i = parent.childrenCount();

                    while (i--) {
                        var node = parent.childAt(i),
                            maxTest = node[dim] + ((dim === 'X') ? node.width : node.height),
                            minTest = node[dim];

                        if (maxTest > MinMax.max) {
                            MinMax.max = maxTest;
                        }
                        if (minTest < MinMax.min) {
                            MinMax.min = minTest;
                        }

                        this.getMinMaxCoord(dim, node, MinMax);
                    }
                    return MinMax;
                },

                /**
                 * @param {object} nodeStructure
                 * @returns {boolean}
                 */
                hasGrandChildren: function (nodeStructure) {
                    var i = nodeStructure.children.length;
                    while (i--) {
                        if (nodeStructure.children[i].children) {
                            return true;
                        }
                    }
                    return false;
                }
            };

            /**
             * TreeNode constructor.
             * @param {object} nodeStructure
             * @param {number} id
             * @param {number} parentId
             * @param {Tree} tree
             * @param {number} stackParentId
             * @constructor
             */
            var TreeNode = function (nodeStructure, id, parentId, tree, stackParentId) {
                this.reset(nodeStructure, id, parentId, tree, stackParentId);
            };

            TreeNode.prototype = {

                /**
                 * @param {object} nodeStructure
                 * @param {number} id
                 * @param {number} parentId
                 * @param {Tree} tree
                 * @param {number} stackParentId
                 * @returns {TreeNode}
                 */
                reset: function (nodeStructure, id, parentId, tree, stackParentId) {
                    this.id = id;
                    this.parentId = parentId;
                    this.treeId = tree.id;

                    this.prelim = 0;
                    this.modifier = 0;
                    this.leftNeighborId = null;

                    this.stackParentId = stackParentId;

                    // pseudo node is a node with width=height=0, it is invisible, but necessary for the correct positioning of the tree
                    this.pseudo = nodeStructure === 'pseudo' || nodeStructure[
                        'pseudo']; // todo: surely if nodeStructure is a scalar then the rest will error:

                    this.meta = nodeStructure.meta || {};
                    this.image = nodeStructure.image || null;

                    this.link = UTIL.createMerge(tree.CONFIG.node.link, nodeStructure.link);

                    this.connStyle = UTIL.createMerge(tree.CONFIG.connectors, nodeStructure.connectors);
                    this.connector = null;

                    this.drawLineThrough = nodeStructure.drawLineThrough === false ? false : (nodeStructure
                        .drawLineThrough || tree.CONFIG.node.drawLineThrough);

                    this.collapsable = nodeStructure.collapsable === false ? false : (nodeStructure
                        .collapsable || tree
                        .CONFIG.node.collapsable);
                    this.collapsed = nodeStructure.collapsed;

                    this.text = nodeStructure.text;

                    // '.node' DIV
                    this.nodeInnerHTML = nodeStructure.innerHTML;
                    this.nodeHTMLclass = (tree.CONFIG.node.HTMLclass ? tree.CONFIG.node.HTMLclass : '') +
                        // globally defined class for the nodex
                        (nodeStructure.HTMLclass ? (' ' + nodeStructure.HTMLclass) :
                            ''); // + specific node class

                    this.nodeHTMLid = nodeStructure.HTMLid;

                    this.children = [];

                    return this;
                },

                /**
                 * @returns {Tree}
                 */
                getTree: function () {
                    return TreeStore.get(this.treeId);
                },

                /**
                 * @returns {object}
                 */
                getTreeConfig: function () {
                    return this.getTree().CONFIG;
                },

                /**
                 * @returns {NodeDB}
                 */
                getTreeNodeDb: function () {
                    return this.getTree().getNodeDb();
                },

                /**
                 * @param {number} nodeId
                 * @returns {TreeNode}
                 */
                lookupNode: function (nodeId) {
                    return this.getTreeNodeDb().get(nodeId);
                },

                /**
                 * @returns {Tree}
                 */
                Tree: function () {
                    return TreeStore.get(this.treeId);
                },

                /**
                 * @param {number} nodeId
                 * @returns {TreeNode}
                 */
                dbGet: function (nodeId) {
                    return this.getTreeNodeDb().get(nodeId);
                },

                /**
                 * Returns the width of the node
                 * @returns {float}
                 */
                size: function () {
                    var orientation = this.getTreeConfig().rootOrientation;

                    if (this.pseudo) {
                        // prevents separating the subtrees
                        return (-this.getTreeConfig().subTeeSeparation);
                    }

                    if (orientation === 'NORTH' || orientation === 'SOUTH') {
                        return this.width;
                    } else if (orientation === 'WEST' || orientation === 'EAST') {
                        return this.height;
                    }
                },

                /**
                 * @returns {number}
                 */
                childrenCount: function () {
                    return ((this.collapsed || !this.children) ? 0 : this.children.length);
                },

                /**
                 * @param {number} index
                 * @returns {TreeNode}
                 */
                childAt: function (index) {
                    return this.dbGet(this.children[index]);
                },

                /**
                 * @returns {TreeNode}
                 */
                firstChild: function () {
                    return this.childAt(0);
                },

                /**
                 * @returns {TreeNode}
                 */
                lastChild: function () {
                    return this.childAt(this.children.length - 1);
                },

                /**
                 * @returns {TreeNode}
                 */
                parent: function () {
                    return this.lookupNode(this.parentId);
                },

                /**
                 * @returns {TreeNode}
                 */
                leftNeighbor: function () {
                    if (this.leftNeighborId) {
                        return this.lookupNode(this.leftNeighborId);
                    }
                },

                /**
                 * @returns {TreeNode}
                 */
                rightNeighbor: function () {
                    if (this.rightNeighborId) {
                        return this.lookupNode(this.rightNeighborId);
                    }
                },

                /**
                 * @returns {TreeNode}
                 */
                leftSibling: function () {
                    var leftNeighbor = this.leftNeighbor();

                    if (leftNeighbor && leftNeighbor.parentId === this.parentId) {
                        return leftNeighbor;
                    }
                },

                /**
                 * @returns {TreeNode}
                 */
                rightSibling: function () {
                    var rightNeighbor = this.rightNeighbor();

                    if (rightNeighbor && rightNeighbor.parentId === this.parentId) {
                        return rightNeighbor;
                    }
                },

                /**
                 * @returns {number}
                 */
                childrenCenter: function () {
                    var first = this.firstChild(),
                        last = this.lastChild();

                    return (first.prelim + ((last.prelim - first.prelim) + last.size()) / 2);
                },

                /**
                 * Find out if one of the node ancestors is collapsed
                 * @returns {*}
                 */
                collapsedParent: function () {
                    var parent = this.parent();
                    if (!parent) {
                        return false;
                    }
                    if (parent.collapsed) {
                        return parent;
                    }
                    return parent.collapsedParent();
                },

                /**
                 * Returns the leftmost child at specific level, (initial level = 0)
                 * @param level
                 * @param depth
                 * @returns {*}
                 */
                leftMost: function (level, depth) {
                    if (level >= depth) {
                        return this;
                    }
                    if (this.childrenCount() === 0) {
                        return;
                    }

                    for (var i = 0, n = this.childrenCount(); i < n; i++) {
                        var leftmostDescendant = this.childAt(i).leftMost(level + 1, depth);
                        if (leftmostDescendant) {
                            return leftmostDescendant;
                        }
                    }
                },

                // returns start or the end point of the connector line, origin is upper-left
                connectorPoint: function (startPoint) {
                    var orient = this.Tree().CONFIG.rootOrientation,
                        point = {};

                    if (this.stackParentId) { // return different end point if node is a stacked child
                        if (orient === 'NORTH' || orient === 'SOUTH') {
                            orient = 'WEST';
                        } else if (orient === 'EAST' || orient === 'WEST') {
                            orient = 'NORTH';
                        }
                    }

                    // if pseudo, a virtual center is used
                    if (orient === 'NORTH') {
                        point.x = (this.pseudo) ? this.X - this.Tree().CONFIG.subTeeSeparation / 2 : this
                            .X + this.width / 2;
                        point.y = (startPoint) ? this.Y + this.height : this.Y;
                    } else if (orient === 'SOUTH') {
                        point.x = (this.pseudo) ? this.X - this.Tree().CONFIG.subTeeSeparation / 2 : this
                            .X + this.width / 2;
                        point.y = (startPoint) ? this.Y : this.Y + this.height;
                    } else if (orient === 'EAST') {
                        point.x = (startPoint) ? this.X : this.X + this.width;
                        point.y = (this.pseudo) ? this.Y - this.Tree().CONFIG.subTeeSeparation / 2 : this
                            .Y + this.height / 2;
                    } else if (orient === 'WEST') {
                        point.x = (startPoint) ? this.X + this.width : this.X;
                        point.y = (this.pseudo) ? this.Y - this.Tree().CONFIG.subTeeSeparation / 2 : this
                            .Y + this.height / 2;
                    }
                    return point;
                },

                /**
                 * @returns {string}
                 */
                pathStringThrough: function () { // get the geometry of a path going through the node
                    var startPoint = this.connectorPoint(true),
                        endPoint = this.connectorPoint(false);

                    return ["M", startPoint.x + "," + startPoint.y, 'L', endPoint.x + "," + endPoint.y]
                        .join(" ");
                },

                /**
                 * @param {object} hidePoint
                 */
                drawLineThroughMe: function (
                    hidePoint) { // hidepoint se proslijedjuje ako je node sakriven zbog collapsed
                    var pathString = hidePoint ?
                        this.Tree().getPointPathString(hidePoint) :
                        this.pathStringThrough();

                    this.lineThroughMe = this.lineThroughMe || this.Tree()._R.path(pathString);

                    var line_style = UTIL.cloneObj(this.connStyle.style);

                    delete line_style['arrow-start'];
                    delete line_style['arrow-end'];

                    this.lineThroughMe.attr(line_style);

                    if (hidePoint) {
                        this.lineThroughMe.hide();
                        this.lineThroughMe.hidden = true;
                    }
                },

                addSwitchEvent: function (nodeSwitch) {
                    var self = this;
                    UTIL.addEvent(nodeSwitch, 'click',
                        function (e) {
                            e.preventDefault();
                            if (self.getTreeConfig().callback.onBeforeClickCollapseSwitch.apply(self, [
                                    nodeSwitch, e
                                ]) ===
                                false) {
                                return false;
                            }

                            self.toggleCollapse();

                            self.getTreeConfig().callback.onAfterClickCollapseSwitch.apply(self, [
                                nodeSwitch, e
                            ]);
                        }
                    );
                },

                /**
                 * @returns {TreeNode}
                 */
                collapse: function () {
                    if (!this.collapsed) {
                        this.toggleCollapse();
                    }
                    return this;
                },

                /**
                 * @returns {TreeNode}
                 */
                expand: function () {
                    if (this.collapsed) {
                        this.toggleCollapse();
                    }
                    return this;
                },

                /**
                 * @returns {TreeNode}
                 */
                toggleCollapse: function () {
                    var oTree = this.getTree();

                    if (!oTree.inAnimation) {
                        oTree.inAnimation = true;

                        this.collapsed = !this.collapsed; // toggle the collapse at each click
                        UTIL.toggleClass(this.nodeDOM, 'collapsed', this.collapsed);

                        oTree.positionTree();

                        var self = this;

                        setTimeout(
                            function () { // set the flag after the animation
                                oTree.inAnimation = false;
                                oTree.CONFIG.callback.onToggleCollapseFinished.apply(oTree, [self, self
                                    .collapsed
                                ]);
                            },
                            (oTree.CONFIG.animation.nodeSpeed > oTree.CONFIG.animation
                                .connectorsSpeed) ?
                            oTree.CONFIG.animation.nodeSpeed :
                            oTree.CONFIG.animation.connectorsSpeed
                        );
                    }
                    return this;
                },

                hide: function (collapse_to_point) {
                    collapse_to_point = collapse_to_point || false;

                    var bCurrentState = this.hidden;
                    this.hidden = true;

                    this.nodeDOM.style.overflow = 'hidden';

                    var tree = this.getTree(),
                        config = this.getTreeConfig(),
                        oNewState = {
                            opacity: 0
                        };

                    if (collapse_to_point) {
                        oNewState.left = collapse_to_point.x;
                        oNewState.top = collapse_to_point.y;
                    }

                    // if parent was hidden in initial configuration, position the node behind the parent without animations
                    if (!this.positioned || bCurrentState) {
                        this.nodeDOM.style.visibility = 'hidden';
                        if ($) {
                            $(this.nodeDOM).css(oNewState);
                        } else {
                            this.nodeDOM.style.left = oNewState.left + 'px';
                            this.nodeDOM.style.top = oNewState.top + 'px';
                        }
                        this.positioned = true;
                    } else {
                        // todo: fix flashy bug when a node is manually hidden and tree.redraw is called.
                        if ($) {
                            $(this.nodeDOM).animate(
                                oNewState, config.animation.nodeSpeed, config.animation.nodeAnimation,
                                function () {
                                    this.style.visibility = 'hidden';
                                }
                            );
                        } else {
                            this.nodeDOM.style.transition = 'all ' + config.animation.nodeSpeed + 'ms ease';
                            this.nodeDOM.style.transitionProperty = 'opacity, left, top';
                            this.nodeDOM.style.opacity = oNewState.opacity;
                            this.nodeDOM.style.left = oNewState.left + 'px';
                            this.nodeDOM.style.top = oNewState.top + 'px';
                            this.nodeDOM.style.visibility = 'hidden';
                        }
                    }

                    // animate the line through node if the line exists
                    if (this.lineThroughMe) {
                        var new_path = tree.getPointPathString(collapse_to_point);
                        if (bCurrentState) {
                            // update without animations
                            this.lineThroughMe.attr({
                                path: new_path
                            });
                        } else {
                            // update with animations
                            tree.animatePath(this.lineThroughMe, tree.getPointPathString(
                                collapse_to_point));
                        }
                    }

                    return this;
                },

                /**
                 * @returns {TreeNode}
                 */
                hideConnector: function () {
                    var oTree = this.Tree();
                    var oPath = oTree.connectionStore[this.id];
                    if (oPath) {
                        oPath.animate({
                                'opacity': 0
                            },
                            oTree.CONFIG.animation.connectorsSpeed,
                            oTree.CONFIG.animation.connectorsAnimation
                        );
                    }
                    return this;
                },

                show: function () {
                    var bCurrentState = this.hidden;
                    this.hidden = false;

                    this.nodeDOM.style.visibility = 'visible';

                    var oTree = this.Tree();

                    var oNewState = {
                            left: this.X,
                            top: this.Y,
                            opacity: 1
                        },
                        config = this.getTreeConfig();

                    // if the node was hidden, update opacity and position
                    if ($) {
                        $(this.nodeDOM).animate(
                            oNewState,
                            config.animation.nodeSpeed, config.animation.nodeAnimation,
                            function () {
                                // $.animate applies "overflow:hidden" to the node, remove it to avoid visual problems
                                this.style.overflow = "";
                            }
                        );
                    } else {
                        this.nodeDOM.style.transition = 'all ' + config.animation.nodeSpeed + 'ms ease';
                        this.nodeDOM.style.transitionProperty = 'opacity, left, top';
                        this.nodeDOM.style.left = oNewState.left + 'px';
                        this.nodeDOM.style.top = oNewState.top + 'px';
                        this.nodeDOM.style.opacity = oNewState.opacity;
                        this.nodeDOM.style.overflow = '';
                    }

                    if (this.lineThroughMe) {
                        this.getTree().animatePath(this.lineThroughMe, this.pathStringThrough());
                    }

                    return this;
                },

                /**
                 * @returns {TreeNode}
                 */
                showConnector: function () {
                    var oTree = this.Tree();
                    var oPath = oTree.connectionStore[this.id];
                    if (oPath) {
                        oPath.animate({
                                'opacity': 1
                            },
                            oTree.CONFIG.animation.connectorsSpeed,
                            oTree.CONFIG.animation.connectorsAnimation
                        );
                    }
                    return this;
                }
            };


            /**
             * Build a node from the 'text' and 'img' property and return with it.
             *
             * The node will contain all the fields that present under the 'text' property
             * Each field will refer to a css class with name defined as node-{$property_name}
             *
             * Example:
             * The definition:
             *
             *   text: {
             *     desc: "some description",
             *     paragraph: "some text"
             *   }
             *
             * will generate the following elements:
             *
             *   <p class="node-desc">some description</p>
             *   <p class="node-paragraph">some text</p>
             *
             * @Returns the configured node
             */
            TreeNode.prototype.buildNodeFromText = function (node) {
                // IMAGE
                if (this.image) {
                    image = document.createElement('img');
                    image.src = this.image;
                    node.appendChild(image);
                }

                // TEXT
                if (this.text) {
                    for (var key in this.text) {
                        // adding DATA Attributes to the node
                        if (key.startsWith("data-")) {
                            node.setAttribute(key, this.text[key]);
                        } else {

                            var textElement = document.createElement(this.text[key].href ? 'a' : 'p');

                            // make an <a> element if required
                            if (this.text[key].href) {
                                textElement.href = this.text[key].href;
                                if (this.text[key].target) {
                                    textElement.target = this.text[key].target;
                                }
                            }

                            textElement.className = "node-" + key;
                            textElement.appendChild(document.createTextNode(
                                this.text[key].val ? this.text[key].val :
                                this.text[key] instanceof Object ? "'val' param missing!" : this.text[
                                    key]
                            ));

                            node.appendChild(textElement);
                        }
                    }
                }
                return node;
            };

            /**
             * Build a node from  'nodeInnerHTML' property that defines an existing HTML element, referenced by it's id, e.g: #someElement
             * Change the text in the passed node to 'Wrong ID selector' if the referenced element does ot exist,
             * return with a cloned and configured node otherwise
             *
             * @Returns node the configured node
             */
            TreeNode.prototype.buildNodeFromHtml = function (node) {
                // get some element by ID and clone its structure into a node
                if (this.nodeInnerHTML.charAt(0) === "#") {
                    var elem = document.getElementById(this.nodeInnerHTML.substring(1));
                    if (elem) {
                        node = elem.cloneNode(true);
                        node.id += "-clone";
                        node.className += " node";
                    } else {
                        node.innerHTML = "<b> Wrong ID selector </b>";
                    }
                } else {
                    // insert your custom HTML into a node
                    node.innerHTML = this.nodeInnerHTML;
                }
                return node;
            };

            /**
             * @param {Tree} tree
             */
            TreeNode.prototype.createGeometry = function (tree) {
                if (this.id === 0 && tree.CONFIG.hideRootNode) {
                    this.width = 0;
                    this.height = 0;
                    return;
                }

                var drawArea = tree.drawArea,
                    image,

                    /////////// CREATE NODE //////////////
                    node = document.createElement(this.link.href ? 'a' : 'div');

                node.className = (!this.pseudo) ? TreeNode.CONFIG.nodeHTMLclass : 'pseudo';
                if (this.nodeHTMLclass && !this.pseudo) {
                    node.className += ' ' + this.nodeHTMLclass;
                }

                if (this.nodeHTMLid) {
                    node.id = this.nodeHTMLid;
                }

                if (this.link.href) {
                    node.href = this.link.href;
                    node.target = this.link.target;
                }

                if ($) {
                    $(node).data('treenode', this);
                } else {
                    node.data = {
                        'treenode': this
                    };
                }

                /////////// BUILD NODE CONTENT //////////////
                if (!this.pseudo) {
                    node = this.nodeInnerHTML ? this.buildNodeFromHtml(node) : this.buildNodeFromText(node)

                    // handle collapse switch
                    if (this.collapsed || (this.collapsable && this.childrenCount() && !this.stackParentId)) {
                        this.createSwitchGeometry(tree, node);
                    }
                }

                tree.CONFIG.callback.onCreateNode.apply(tree, [this, node]);

                /////////// APPEND all //////////////
                drawArea.appendChild(node);

                this.width = node.offsetWidth;
                this.height = node.offsetHeight;

                this.nodeDOM = node;

                tree.imageLoader.processNode(this);
            };

            /**
             * @param {Tree} tree
             * @param {Element} nodeEl
             */
            TreeNode.prototype.createSwitchGeometry = function (tree, nodeEl) {
                nodeEl = nodeEl || this.nodeDOM;

                // safe guard and check to see if it has a collapse switch
                var nodeSwitchEl = UTIL.findEl('.collapse-switch', true, nodeEl);
                if (!nodeSwitchEl) {
                    nodeSwitchEl = document.createElement('a');
                    nodeSwitchEl.className = "collapse-switch";

                    nodeEl.appendChild(nodeSwitchEl);
                    this.addSwitchEvent(nodeSwitchEl);
                    if (this.collapsed) {
                        nodeEl.className += " collapsed";
                    }

                    tree.CONFIG.callback.onCreateNodeCollapseSwitch.apply(tree, [this, nodeEl, nodeSwitchEl]);
                }
                return nodeSwitchEl;
            };


            // ###########################################
            //      Expose global + default CONFIG params
            // ###########################################


            Tree.CONFIG = {
                maxDepth: 100,
                rootOrientation: 'NORTH', // NORTH || EAST || WEST || SOUTH
                nodeAlign: 'CENTER', // CENTER || TOP || BOTTOM
                levelSeparation: 30,
                siblingSeparation: 30,
                subTeeSeparation: 30,

                hideRootNode: false,

                animateOnInit: false,
                animateOnInitDelay: 500,

                padding: 15, // the difference is seen only when the scrollbar is shown
                scrollbar: 'native', // "native" || "fancy" || "None" (PS: "fancy" requires jquery and perfect-scrollbar)

                connectors: {
                    type: 'curve', // 'curve' || 'step' || 'straight' || 'bCurve'
                    style: {
                        stroke: 'black'
                    },
                    stackIndent: 15
                },

                node: { // each node inherits this, it can all be overridden in node config

                    // HTMLclass: 'node',
                    // drawLineThrough: false,
                    // collapsable: false,
                    link: {
                        target: '_self'
                    }
                },

                animation: { // each node inherits this, it can all be overridden in node config
                    nodeSpeed: 450,
                    nodeAnimation: 'linear',
                    connectorsSpeed: 450,
                    connectorsAnimation: 'linear'
                },

                callback: {
                    onCreateNode: function (treeNode, treeNodeDom) {}, // this = Tree
                    onCreateNodeCollapseSwitch: function (treeNode, treeNodeDom, switchDom) {}, // this = Tree
                    onAfterAddNode: function (newTreeNode, parentTreeNode, nodeStructure) {}, // this = Tree
                    onBeforeAddNode: function (parentTreeNode, nodeStructure) {}, // this = Tree
                    onAfterPositionNode: function (treeNode, nodeDbIndex, containerCenter,
                        treeCenter) {}, // this = Tree
                    onBeforePositionNode: function (treeNode, nodeDbIndex, containerCenter,
                        treeCenter) {}, // this = Tree
                    onToggleCollapseFinished: function (treeNode, bIsCollapsed) {}, // this = Tree
                    onAfterClickCollapseSwitch: function (nodeSwitch, event) {}, // this = TreeNode
                    onBeforeClickCollapseSwitch: function (nodeSwitch, event) {}, // this = TreeNode
                    onTreeLoaded: function (rootTreeNode) {} // this = Tree
                }
            };

            TreeNode.CONFIG = {
                nodeHTMLclass: 'node'
            };

            // #############################################
            // Makes a JSON chart config out of Array config
            // #############################################

            var JSONconfig = {
                make: function (configArray) {

                    var i = configArray.length,
                        node;

                    this.jsonStructure = {
                        chart: null,
                        nodeStructure: null
                    };
                    //fist loop: find config, find root;
                    while (i--) {
                        node = configArray[i];
                        if (node.hasOwnProperty('container')) {
                            this.jsonStructure.chart = node;
                            continue;
                        }

                        if (!node.hasOwnProperty('parent') && !node.hasOwnProperty('container')) {
                            this.jsonStructure.nodeStructure = node;
                            node._json_id = 0;
                        }
                    }

                    this.findChildren(configArray);

                    return this.jsonStructure;
                },

                findChildren: function (nodes) {
                    var parents = [0]; // start with a a root node

                    while (parents.length) {
                        var parentId = parents.pop(),
                            parent = this.findNode(this.jsonStructure.nodeStructure, parentId),
                            i = 0,
                            len = nodes.length,
                            children = [];

                        for (; i < len; i++) {
                            var node = nodes[i];
                            if (node.parent && (node.parent._json_id ===
                                    parentId)) { // skip config and root nodes

                                node._json_id = this.getID();

                                delete node.parent;

                                children.push(node);
                                parents.push(node._json_id);
                            }
                        }

                        if (children.length) {
                            parent.children = children;
                        }
                    }
                },

                findNode: function (node, nodeId) {
                    var childrenLen, found;

                    if (node._json_id === nodeId) {
                        return node;
                    } else if (node.children) {
                        childrenLen = node.children.length;
                        while (childrenLen--) {
                            found = this.findNode(node.children[childrenLen], nodeId);
                            if (found) {
                                return found;
                            }
                        }
                    }
                },

                getID: (
                    function () {
                        var i = 1;
                        return function () {
                            return i++;
                        };
                    }
                )()
            };

            /**
             * Chart constructor.
             */
            var Treant = function (jsonConfig, callback, jQuery) {
                if (jsonConfig instanceof Array) {
                    jsonConfig = JSONconfig.make(jsonConfig);
                }

                // optional
                if (jQuery) {
                    $ = jQuery;
                }

                this.tree = TreeStore.createTree(jsonConfig);
                this.tree.positionTree(callback);
            };

            Treant.prototype.destroy = function () {
                TreeStore.destroy(this.tree.id);
            };

            /* expose constructor globally */
            window.Treant = Treant;

        })();

    </script>
    <script>
        var config = {
                container: "#basic-example",

                connectors: {
                    type: 'step'
                },
                node: {
                    HTMLclass: 'nodeExample1',


                }

            },
            myProfile = {
                HTMLclass: ' ProfileClass',
                text: {
                    name: "{{Session::get('Name')}}",
                    // title: "CEO",
                    // bucks: "123",
                },
                image: "{{asset('assets/images/1.jpg')}}",




            },

            closeFriend1 = {
                parent: myProfile,
                HTMLclass: 'myOwnNode-1',
                text: {
                    name: "Linda",
                    // title: "You Will Get ",
                    coins: "+200",
                    remarks: " On Every Order",
                },

                stackChildren: true,
                image: "{{asset('assets/images/2.jpg')}}"
            },
            closeFriend2 = {
                parent: myProfile,
                HTMLclass: 'myOwnNode-2',


                text: {
                    name: "Ahmad",
                    coins: "+200",
                    remarks: " On Every Order",
                },
                stackChildren: true,
                image: "{{asset('assets/images/4.jpg')}}"
            },
            closeFriend3 = {
                parent: myProfile,
                HTMLclass: 'myOwnNode-3',

                stackChildren: true,
                text: {
                    //  
                    name: "Danish",
                    title: "New Friend",
                },
                image: "https://simpleicon.com/wp-content/uploads/add-user.png"
            },
            Friend1 = {
                parent: closeFriend1,
                HTMLclass: 'myOwnNode-4',

                text: {
                    name: "friend1",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/4.jpg')}}"
            },
            Friend2 = {
                parent: closeFriend1,
                HTMLclass: 'myOwnNode-5',

                text: {
                    name: "friend2",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/5.jpg')}}"
            },
            Friend3 = {
                parent: closeFriend1,
                HTMLclass: 'myOwnNode-6',

                text: {
                    name: "friend3",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/6.jpg')}}"
            },
            Friend4 = {
                parent: closeFriend2,
                HTMLclass: 'myOwnNode-7',

                text: {
                    name: "friend4",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/7.jpg')}}"
            },
            Friend5 = {
                parent: closeFriend2,
                HTMLclass: 'myOwnNode-8',

                text: {
                    name: "friend5",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/8.jpg')}}"
            },
            Friend6 = {
                parent: closeFriend2,
                HTMLclass: 'myOwnNode-9',

                text: {
                    name: "friend6",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/9.jpg')}}"
            },

            Friend7 = {
                parent: closeFriend3,
                HTMLclass: 'myOwnNode-10',

                text: {
                    name: "friend7",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/10.jpg')}}"
            },
            Friend8 = {
                parent: closeFriend3,
                HTMLclass: 'myOwnNode-11',

                text: {
                    name: "friend8",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/11.jpg')}}"
            },
            Friend9 = {
                parent: myProfile,
                HTMLclass: 'myOwnNode-12',

                text: {
                    name: "friend9",
                    coins: "+100",
                    remarks: " On Every Order",
                },
                image: "{{asset('assets/images/12.jpg')}}"
            }

        chart_config = [
            config,
            myProfile,

        ];




        // Another approach, same result
        // JSON approach

        /*
            var chart_config = {
                chart: {
                    container: "#basic-example",
                    
                    connectors: {
                        type: 'step'
                    },
                    node: {
                        HTMLclass: 'nodeExample1'
                    }
                },
                nodeStructure: {
                    text: {
                        name: "Mark Hill",
                        title: "Chief executive officer",
                        contact: "Tel: 01 213 123 134",
                    },
                    image: "img/2.jpg",
                    children: [
                        {
                            text:{
                                name: "Joe Linux",
                                title: "Chief Technology Officer",
                            },
                            stackChildren: true,
                            image: "img/1.jpg",
                            children: [
                                {
                                    text:{
                                        name: "Ron Blomquist",
                                        title: "Chief Information Security Officer"
                                    },
                                    image: "img/8.jpg"
                                },
                                {
                                    text:{
                                        name: "Michael Rubin",
                                        title: "Chief Innovation Officer",
                                        contact: "we@aregreat.com"
                                    },
                                    image: "img/9.jpg"
                                }
                            ]
                        },
                        {
                            stackChildren: true,
                            text:{
                                name: "Linda May",
                                title: "Chief Business Officer",
                            },
                            image: "img/5.jpg",
                            children: [
                                {
                                    text:{
                                        name: "Alice Lopez",
                                        title: "Chief Communications Officer"
                                    },
                                    image: "img/7.jpg"
                                },
                                {
                                    text:{
                                        name: "Mary Johnson",
                                        title: "Chief Brand Officer"
                                    },
                                    image: "img/4.jpg"
                                },
                                {
                                    text:{
                                        name: "Kirk Douglas",
                                        title: "Chief Business Development Officer"
                                    },
                                    image: "img/11.jpg"
                                }
                            ]
                        },
                        {
                            text:{
                                name: "John Green",
                                title: "Chief accounting officer",
                                contact: "Tel: 01 213 123 134",
                            },
                            image: "img/6.jpg",
                            children: [
                                {
                                    text:{
                                        name: "Erica Reel",
                                        title: "Chief Customer Officer"
                                    },
                                    link: {
                                        href: "http://www.google.com"
                                    },
                                    image: "img/10.jpg"
                                }
                            ]
                        }
                    ]
                }
            };

        */

    </script>

    <script>
        new Treant(chart_config);

    </script>

    <script>
        $(document).ready(function () {
            $(".myOwnNode").click(function () {
                $('#myModal-1').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-1").click(function () {
                $('#myModal-1').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-2").click(function () {
                $('#myModal-1').modal('show');

            })
        })
        $(document).ready(function () {
            $(".myOwnNode-3").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-4").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-5").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-6").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-7").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-8").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-9").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-10").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-11").click(function () {
                $('#myModal').modal('show')
            })
        })
        $(document).ready(function () {
            $(".myOwnNode-12").click(function () {
                $('#myModal').modal('show')
            })
        })

    </script>
    <script>
        $(document).ready(function () {
            $(".ProfileClass").ready(function myFunction() {
                var x = document.createElement("DIV");
                var t = document.createTextNode("Coins {{Session::get('Coins')}}");

                var y = document.getElementsByClassName("ProfileClass");

                x.appendChild(t);

                y[0].appendChild(x);
                x.className = "myClass";
            })
        })

    </script>

    <script>
        $(document).ready(function () {
            $(".ProfileClass").ready(function myFunction() {
                var a = document.createElement("DIV");
                var b = document.createTextNode("Rank {{Session::get('Rank')}}");
                var y = document.getElementsByClassName("ProfileClass");

                a.appendChild(b);


                y[0].appendChild(a);
                a.className = "myClass-1";

            })
        })

        function getFriends(refID, cls, parent) {



            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    var data = this.response;
                    a = JSON.parse(data);

                    for (i = 0; i < a.length; i++) {

                        name = a[i].ReferredCustomerName;
                        //parent=parents[0];
                        ID = a[i].ReferredCustomerID;
                        Balance = a[i].ReferredCustomerBalance;

                        friend = makeFriendNode(parent, name, Balance, ID);
                        chart_config.push(friend);
                        parents.push([friend, ID]);
                        //parent=friend;
                        // getFriends(ID,'ProfileClass');


                    } //for loop


                    // getFriends();


                    //  Treant(chart_config); 
                }
            };


            xhttp.open("GET", "./getFriends/" + refID, false);

            xhttp.send();


        }

        parents = [];

        function getAllFriends() {
            chart_config = [{
                container: "#basic-example",

                connectors: {
                    type: 'step'
                },
                node: {
                    HTMLclass: 'nodeExample1',


                }

            }];
            myProfile = {
                HTMLclass: "ProfileClasss",
                stackChildren: true,
                text: {
                    name: "{{Session::get('Name')}}",
                    // title: "CEO",
                    // bucks: "123",
                },
                image: "{{asset('assets/images/1.jpg')}}",




            }
            chart_config.push(myProfile);
        
        refID=document.getElementById("refID").value;
      //  alert(refID);
      //sleep(500);
        parents.push([myProfile,refID]);

       i=0;
      // alert(ChildStack.length)
        while(parents.length!=0){
            node=parents.shift();
           // alert(node[0]);
            getFriends(node[1],'ProfileClass',node[0]);
           // alert();
         // setTimeout(() => { console.log("World!"); }, 2000);
    
            //parents.pop();
           // alert("After i\n Child ID\n" +ChildStack+"After i\n Parents Left =\n"+parents);
            i++;
        }
        Treant(chart_config);
        chart_config=[];
        parents=[];
    }
    function makeFriendNode(parentNode,name,Balance,ID){
        friend = {
                    parent: parentNode,
                    stackChildren: true,
                    HTMLclass: 'myOwnNode-1',
                    text: {
                    name: name,
                    title: ID,
                    coins: Balance,
                    remarks: ID,
                }

            }
            return friend;
        }

    </script>
    <script>
        $(document).ready(function () {
            $(".myOwnNode-4").click(function () {
                $('#myModal').modal('show')
            })
        })

           setTimeout(() => {
                    var x = document.getElementById("sound");
                    x.play();

                }, 500);
    </script>
    

</body>

</html>
