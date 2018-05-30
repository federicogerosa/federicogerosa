<?php
function dashboardina()
{

    $nomesito = "Apertamente Dashboard";

    require("../view/parcials/header.php");
    ?>

    <!--Inizio dashboardApertamente-->

    <style>

        .demo-card-wide > .mdl-card__title {
            color: #fff;
            background-color: rgb(63, 81, 181);
        }

        .demo-card-wide.mdl-card {
            width: 512px;
            margin: auto;
        }

        .dashboard {
            display: flex;
            margin: 10% auto;
        }

        .demo-list-two {
            width: auto;
            margin: 0;
            padding: 0;
        }

        .mdl-button {
            color: white;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0;
            cursor: pointer;
            text-align: center;
            line-height: 36px;
        }

        .mdl-list__item-avatar, .mdl-list__item-avatar.material-icons {
            height: 40px;
            width: 40px;
            box-sizing: border-box;
            border-radius: 0;
            background-color: transparent;
            font-size: 40px;
            color: grey;
        }

    </style>

    <script>
        $(document).ready(
            function goToList() {
                $("#p1, #p2").click(function () {
                    var url = $("#url").val();
                    window.open(url.concat("src/frontEnd/listaEsercenti.php"), "_self");
                });
            }
        );
    </script>

    <div class="dashboard">

        <!--card per ultimi questionari (ordinati per daat creazione?)-->
        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-right: 5%;">
            <div class="mdl-card__title" style="height: 150px;">
            </div>
            <div class="mdl-card__supporting-text">
                <ul class="demo-list-two mdl-list"></ul>
            </div>
            <div class="mdl-card__title">
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="listaQuestionari"
                        style="margin: auto;">
                    Vai a questionari
                </a>
            </div>
        </div>

        <!--Card per ultimi utenti (ordinati per?)-->
        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-left: 5%;">
            <div class="mdl-card__title" style="height: 150px;">
            </div>
            <div class="mdl-card__supporting-text">
                <ul class="demo-list-two mdl-list">
                </ul>
            </div>

            <div class="mdl-card__title">
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="listaEsercenti"
                   style="margin: auto;">
                    Vai a esercenti
                </a>
            </div>

        </div>
        <div class="demo-card-wide mdl-card mdl-shadow--2dp" style="margin-left: 5%;">
            <div class="mdl-card__title" style="height: 150px;">
            </div>
            <div class="mdl-card__supporting-text">
                <ul class="demo-list-two mdl-list">
                </ul>
            </div>

            <div class="mdl-card__title">
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="listaUtenti"
                   style="margin: auto;">
                    Vai a utenti
                </a>
            </div>

        </div>

    </div>

    <!--Fine dashboardApertamente-->

    <?php
    include("../view/parcials/footer.php");
}
?>
