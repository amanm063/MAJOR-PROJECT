     <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Oxygen', sans-serif;
        }

        nav {
            background-color: #161616;
            color: whitesmoke;
            margin: 0;
            padding: 25px;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
            font-size: 25px;
        }

        li {
            display: inline-block;
            text-decoration: none;
            /* margin-right: 100px; */
        }

        a {
            color: whitesmoke;
            text-decoration: none;
        }

        li.left {
            margin-right: 300px;
            margin-left: 30px;
        }

        li.right {
            margin-left: 100px;
        }

        .dropbtn {
            background-color: #161616;
            color: white;
            padding: 16px;
            font-size: 25px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #161616;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            font-size: 16px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li class="left">DIMENSION XI</li>

            <li class="dropdown right">
                <a class="dropbtn link mr-15 color-white">2008-2020</a>
                <div class="dropdown-content">
                    <a href="#">PLAYERS</a>
                    <a href="#">OTHER</a>
                </div>
            </li>
            <li class="dropdown right">
                <a class="dropbtn link mx-15 color-white">2021</a>
                <div class="dropdown-content">
                    <a href="#">BATTER</a>
                    <a href="#">BOWLER</a>
                </div>
            </li>
            <li class="dropdown right">
                <a class="dropbtn link mx-15 color-white">2022</a>
                <div class="dropdown-content">
                    <a href="#">BATTER</a>
                    <a href="#">BOWLER</a>
                </div>
            </li>

            <li class="right">
                <a href="">TEAMS</a>
            </li>


            <li class="right">
                <a href="">HELP</a>
            </li>
        </ul>
    </nav>