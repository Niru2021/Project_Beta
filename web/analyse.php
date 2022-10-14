<?php /** */include("commun/header.php");?>

<style>
    :root{
        --color-primary:#7380ec;
        --color-yellow: #e1d834;
        --color-apple-green: #cc8c65;
        --color-blue-light: #65bdcc;
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
    main .insights > div.employesSurSite img{
        background: var(--color-yellow) !important;
    }
    main .insights > div.employesEnTt img{
        background: var(--color-apple-green) !important;
    }
    main .insights > div.employesCompatible img{
        background: var(--color-blue-light) !important;
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
            <span><img src="./image/user.png"></span>
            <div class="middle">
                <div class="left">
                    <h3>Total employés</h3>
                    <h1>
                        <?php
                            $get_col = getCollaborateurs();
                            echo $get_col['countOfCollaborateurs'];
                        ?>
                    </h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36"
                            style="<?php
                            $get_colCollaborateurs = getCollaborateurs();
                            $get_colCollaborateur2 = getCollaborateurs();
                            $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                            $value2 = $get_colCollaborateur2['countOfCollaborateurs'];
                            calcPourcent($value2, $value1)*2;
                        ?>stroke-dashoffset: <?=0?>;">></circle>
                    </svg>
                    <div class="number">
                        <p>
                            <?php
                            $get_colCollaborateurs = getCollaborateurs();
                            $get_colCollaborateur2 = getCollaborateurs();
                            $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                            $value2 = $get_colCollaborateur2['countOfCollaborateurs'];
                            echo calcPourcent($value2, $value1);
                            ?>
                        %</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Effectif 2022</small>
        </div>
        <!--     End Employés actif   -->
        <div class="postesAPourvoir">
            <span><img src="./image/jobs.png"></span>
            <div class="middle">
                <div class="left">
                    <h3>Total Postes</h3>
                    <h1>
                        <?php $get_colEmploi = getEmploi();
                            echo $get_colEmploi['countOfEmploi'];
                        ?>
                    </h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36"
                                style="<?php
                                $get_colCollaborateurs = getCollaborateurs();
                                $get_colEmploi = getEmploi();
                                $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                                $value2 = $get_colEmploi['countOfEmploi'];
                                calcPourcent($value2, $value1)*2;
                                ?>stroke-dashoffset: <?=250-calcPourcent($value2, $value1)*2?>;">
                        </circle>
                    </svg>
                    <div class="number">
                        <p><?php
                                $get_colCollaborateurs = getCollaborateurs();
                                $get_colEmploi = getEmploi();
                                $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                                $value2 = $get_colEmploi['countOfEmploi'];
                                echo calcPourcent($value2, $value1)
                            ?>
                        %</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Source Septembre 2022</small>
        </div>
        <!--     End Postes a pourvoir   -->
        <div class="tauxAbsences">
            <span><img src="./image/analytics.png"/></span>
            <div class="middle">
                <div class="left">
                    <h3>Total des absences</h3>
                    <h1><?php
                            $get_colCollaborateurAbs = getCollaborateursAbs();
                            echo $get_colCollaborateurAbs['countOfCollaborateursAbs'];
                        ?>
                    </h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36"
                        style="<?php
                            $get_colCollaborateurs = getCollaborateurs();
                            $get_colCollaborateurAbs = getCollaborateursAbs();
                            $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                            $value2 = $get_colCollaborateurAbs['countOfCollaborateursAbs'];
                            calcPourcent($value2, $value1)*2;
                            ?>stroke-dashoffset: <?=250-calcPourcent($value2, $value1)*2?>;">
                        </circle>
                    </svg>
                    <div class="number">
                        <p>
                            <?php
                                $get_colCollaborateurs = getCollaborateurs();
                                $get_colCollaborateurAbs = getCollaborateursAbs();
                                $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                                $value2 = $get_colCollaborateurAbs['countOfCollaborateursAbs'];
                                echo calcPourcent($value2, $value1);
                            ?>
                            %</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">au 14 Septembre 2022</small>
        </div>
        <!--     End Taux absence   -->
    </div>

    <div class="insights" style="margin-top:5px;">
        <div class="employesSurSite">
            <span><img src="./image/build.png"></span>
            <div class="middle">
                <div class="left">
                    <h3>Total employés sur site</h3>
                    <h1>
                        <?php
                        $get_col = getCollaborateursPresentSurSite();
                        echo $get_col['countOfCollaborateursPresentSurSite'];
                        ?>
                    </h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36"
                                style="<?php
                                $get_colCollaborateurs = getCollaborateurs();
                                $get_colCollaborateurSurSite = getCollaborateursPresentSurSite();
                                $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                                $value2 = $get_colCollaborateurSurSite['countOfCollaborateursPresentSurSite'];
                                calcPourcent($value2, $value1)*2;
                                ?>stroke-dashoffset: <?=250-calcPourcent($value2, $value1)*2?>;">></circle>
                    </svg>
                    <div class="number">
                        <p>
                            <?php
                            $get_colCollaborateurs = getCollaborateurs();
                            $get_colCollaborateurSurSite = getCollaborateursPresentSurSite();
                            $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                            $value2 = $get_colCollaborateurSurSite['countOfCollaborateursPresentSurSite'];
                            echo calcPourcent($value2, $value1);
                            ?>
                            %</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Effectif 2022</small>
        </div>
        <!--     End Employés actif   -->
        <div class="employesEnTt">
            <span><img src="./image/house.png"></span>
            <div class="middle">
                <div class="left">
                    <h3>Total employés en TT</h3>
                    <h1>
                        <?php $get_colCollaborateurTt = getCollaborateursTt();
                        echo $get_colCollaborateurTt['countOfCollaborateursTt'];
                        ?>
                    </h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36"
                                style="<?php
                                $get_colCollaborateurs = getCollaborateurs();
                                $get_colCollaborateurTt = getCollaborateursTt();
                                $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                                $value2 = $get_colCollaborateurTt['countOfCollaborateursTt'];
                                calcPourcent($value2, $value1)*2;
                                ?>stroke-dashoffset: <?=250-calcPourcent($value2, $value1)*2?>;">
                        </circle>
                    </svg>
                    <div class="number">
                        <p><?php
                            $get_colCollaborateurs = getCollaborateurs();
                            $get_colCollaborateurTt = getCollaborateursTt();
                            $value1 =  $get_colCollaborateurs['countOfCollaborateurs'];
                            $value2 = $get_colCollaborateurTt['countOfCollaborateursTt'];
                            echo calcPourcent($value2, $value1);
                            ?>
                            %</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Au 14 Septembre 2022</small>
        </div>
        <!--     End Postes a pourvoir   -->
        <div class="employesCompatible">
            <span><img src="./image/join.png"></span>
            <div class="middle">
                <div class="left">
                    <h3>Profils interne compatible</h3>
                    <h1>3</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx="38" cy="38" r="36"
                                style="stroke-dashoffset:205;">
                        </circle>
                    </svg>
                    <div class="number">
                        <p>25%</p>
                    </div>
                </div>
            </div>
            <small class="text-muted">Au 14 Septembre 2022</small>
        </div>
        <!--     End Taux absence   -->
    </div>
</main>
