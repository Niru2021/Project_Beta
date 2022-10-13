<?php /** */include("commun/header.php");?>

<style>
    :root{
        --color-primary:#7380ec;
        --color-danger:#ff7782;
        --color-success:#41f1b6;
        --color-warning:#ffbb55;
        --color-white:#fff;
        --color-light: rgba(132, 139, 200, 0.18);

        --card-border-radius: 2rem;
        --border-radius-1: 0.4rem;
        --border-radius-2: 0.8rem;
        --border-radius-3: 1.6rem;

        --card-padding: 1.8rem;
        --padding-1: 1.2rem;

        --box-shadow: 0rem 2rem 3rem var(--color-light);
    }

    main .title-dashboard{
        color:#006EB0;
        margin: 15px;
        margin-bottom: 0;
        padding:0.8rem;
        background: var(--color-white);
        border-radius: calc(var(--card-border-radius)/2);
        box-shadow: var(--box-shadow);
    }

    main .insights{
        display:grid;
        grid-template-columns: repeat(3, 1fr);
        gap:1.6rem;
        margin: 0 15px ;
    }
    main .insights > div {
        background: var(--color-white);
        padding: var(--card-padding);
        border-radius:var(--card-border-radius);
        margin-top: 1rem;
        box-shadow: var(--box-shadow);
        transition: all 300ms ease;
    }
    main .insights > div:hover{
        box-shadow: none;
    }
    main .insights > div span img {
        background: var(--color-primary);
        padding: 0.8rem;
        border-radius:50%;
        font-size: 2rem;
    }
    main .insights > div.postesAPourvoir img{
        background: var(--color-success) !important;
    }
    main .insights > div.tauxAbsences img{
        background: var(--color-danger) !important;
    }

    main .insights > div .middle{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    main .insights h3 {
        margin: 1rem 0 0.6rem;
        font-size: 1rem;
    }
    main .insights .progress {
        position: relative;
        width: 92px;
        height: 92px;
        border-radius:50%;
    }
    main .insights svg {
        width: 7rem;
        height:7rem;
    }

    main .insights svg circle{
        fill: none;
        stroke :var(--color-primary);
        stroke-width: 14;
        stroke-linecap: round;
        transform: translate(5px, 5px);
        stroke-dasharray: 250;
        stroke-dashoffset: 0;

    }
    main .insights .postesAPourvoir svg circle {
        stroke-dashoffset: 235;
    }
    main .insights .tauxAbsences svg circle {
        stroke-dashoffset: 249;
    }

    main .insights .progress .number {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width:100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    main .insights small {
        margin-top: 1.6rem;
        display:block;
    }
</style>
<main>
    <div class="title-dashboard">
        <h1>Dashboard - Data analyse</h1>
    </div>


    <div class="insights">
        <div class="employesActif">
            <span ><img src="./image/user.png"></span>
            <div class="middle">
                <div class="left">
                    <h3>Total employés</h3>
                    <h1>10 300</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36"></circle>
                    </svg>
                    <div class="number">
                        <p>100%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Effectif 2022</small>
        </div>
        <!--     End Employés actif   -->
        <div class="postesAPourvoir">
            <span> <img src="./image/jobs.png"></span>
            <div class="middle">
                <div class="left">
                    <h3>Total Postes</h3>
                    <h1>300</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36">

                        </circle>
                    </svg>
                    <div class="number">
                        <p>3%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Janvier 2022</small>
        </div>
        <!--     End Postes a pourvoir   -->
        <div class="tauxAbsences">
            <span ><img src="./image/analytics.png"></span>
            <div class="middle">
                <div class="left">
                    <h3>Taux d'absence Actuel</h3>
                    <h1>40</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36">

                        </circle>
                    </svg>
                    <div class="number">
                        <p>0.4%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">au 01 Janvier 2022</small>
        </div>
        <!--     End Taux abs   -->
    </div>
</main>
