@extends('layouts.front')
@section('content')
<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
              INSTRUCTIONS AUX AUTEURS
            </h1>
          </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-wrap p-lg-6" align="justify">
                            <table border="0" cellpadding="1" cellspacing="1" style="width:100%">
                            <tbody>
                                <tr>
                                    <td style="text-align:center"><img alt="" src="{{ asset('front/img/head.png') }}" style="height:84px; width:650px"></td>
                                </tr>
                            </tbody>
                            </table>
                            <p>En faisant la soumission, le premier auteur devra envoyer une photo tête nue en pièce jointe. </p>
                            <p>Les articles doivent être soumis uniquement en format électronique. Les photographies doivent être aussi en format électronique. Les articles soumis en version papier ne sont pas acceptés pour soumission.</p>
                            <ul>
                                <li style="text-align: justify;">Adresse du site de soumission d’articles : <a href="mailto:journal.hnjm@gmail.com">journal.hnjm@gmail.com</a></li>
                            </ul>
                            <p>Chaque article soumis doit être conforme aux instructions aux auteurs. Les auteurs qui soumettent leur travail acceptent implicitement que tous les auteurs ont lu le travail soumis et qu’il n’y a aucun problème d’éthique ni de conflit d’intérêt.</p>
                            <h3>Article</h3>
                            <p>Le manuscrit doit être écrit en format électronique en double interligne avec une police Times </p>
                            <p>New Roman de taille 12.</p>
                            <p>Le format préférentiel pour le texte est Word RTF. Il est recommandé d’éviter les formats de type PDF ou PostScript.</p>
                            <p>Les pages doivent être numérotées en bas et centré. Sur la première page de la soumission doivent figurer le titre (en minuscule) en français et anglais, les auteurs (nom en minuscule suivi des initiales des prénoms), les institutions impliquées, le nom et l’adresse exacte de l’auteur correspondant. L’article doit avoir une introduction, un résumé (Français et Anglais) et une conclusion. Les tableaux et les illustrations apparaissent après les références bibliographiques, sur des pages séparées. Les illustrations doivent être accompagnées d’une légende courte explicative.</p>
                            <h4>Types de manuscrit</h4> <br>
                            <h4>Article original</h4>
                            <p>Le compte de mots, hors références bibliographiques doit être de <b>1500 à 3000 mots</b>.Les références bibliographiques doivent être inférieures à <b>20 références.</b> L’article doit avoir la structure :<i>Introduction, Matériel et Méthodes, Résultats, Discussion, Conclusion.</i>  Les auteurs doivent décrire le type de l’article : étude clinique ou épidémiologique, test diagnostique, essai randomisé, étude de cohorte, étude cas-témoins, étude transversale, étude pronostique, série de cas cliniques.</p>
                            <ul>
                                <li>Le titre doit être limité à 15 mots et donner le message de l’article que les auteurs veulent que le lecteur retienne.</li>
                                <li>Le résumé doit avoir la structure : But, Matériel, Résultats et Conclusion. Il ne doit pas avoir plus de 250 mots ou plus de 16 lignes. L’article original doit avoir 2 résumés : 1 en français et 1 en anglais et des mots clés en français et en anglais.</li>
                                <li>L’introduction doit être brève. Elle fait un court résumé des connaissances référencées et expose clairement le but de l’étude.</li>
                                <li>Matériels et Méthode décrit avec le plus de détails possibles la méthodologie du travail afin que le lecteur puisse reproduire s’il le souhaite le même travail dans les mêmes conditions. Les tableaux descriptifs sont sollicités. Les méthodes statistiques doivent être décrites. Pour les faibles effectifs, l’utilisation des pourcentages et des tests statistiques doit être évitée</li>
                                <li>Résultats est une partie importante du travail. Les auteurs ne doivent faire aucun commentaire sur les résultats. La présentation doit être neutre, claire et brève. Il faut préférer les tableaux et les graphes pour présenter les résultats. Seuls les points importants des tableaux ou graphes sont mentionnés dans le texte de cette section.</li>
                                <li>Discussion est la section de commentaires des résultats obtenus. Seuls les points pertinents des résultats sont repris et commentés, 3-4 points (soit 3-4 paragraphes). La discussion n’est pas une revue de la littérature. La discussion ne doit pas récapituler les résultats ni être redondante. Elle doit interpréter en fonction des références les 3-4 points pertinents des résultats de l’étude</li>
                                <li>Conclusion termine systématiquement l’article. Elle doit être brève et répondre aux objectifs de l’étude, énoncés à la fin de l’introduction.</li>
                                <li>Références figurent après la conclusion. Elles sont limitées à 20 références. Les références sont citées dans le texte et numérotées et présentées par ordre d’apparition dans le texte. Toutes les références doivent être citées dans le texte. Les références bibliographiques apparaissent après la conclusion. Les références bibliographiques  doivent suivre le style Vancouver et à mettre entre parenthèse. Les communications personnelles et les références non publiées ne sont pas acceptées. Tous les auteurs doivent être cités, après 6 auteurs il peut être admis la locution " et al. ". Les abréviations des journaux doivent être conformes à celles de l’Index Medicus. </li>

                            </ul>
                            <p>Chaque référence a la structure auteurs-titre-source.</p>
                           <strong><p>Exemples :</p></strong>
                            <ul>
                                <ol>article original</ol>
                            </ul>
                            <p>Tjan Ah, Miller GD, The JG Some esthetic factors in a smile. J Prosthet Dent 1984 ; 51 : 24-8. </p>
                            <ul>
                                <ol>livre (ouvrage)</ol>
                            </ul>
                            <p>Girard P, Penne G, Missika P. Medecine et chirurgie dentaire : problèmes médicaux en pratique quotidienne. Paris : CDP, 1987. </p>
                            <ul>
                                <ol>chapitre de livre ou article d’un ouvrage</ol>
                            </ul>
                            <p>Neill DJ. The denture space. In : Lefkowitz W. Proceedings of the second international prosthodontics congress. St Louis : Mosby, 1979. pp 23-8.</p>

                            <p>-Illustrations est la section de la version de soumission où figurent les tableaux, graphes, schémas, photographies, organigrammes qui seront nommés "figures". Toutes les illustrations doivent être légendées de façon explicative, numérotées par ordre d’apparition dans le texte, citées dans le texte. Elles peuvent comporter des références. Les photographies couleur sont recommandées. Les formats préférentiels des illustrations sont Microsoft World, JPEG (8 cm de large, ≥ 300 dpi).</p>
                            <h3>Cas clinique</h3>
                            <p>Un article de type cas clinique rapporte un cas ou une série de cas clinique originaux (inférieur ou égale à 5 cas) et bien documentés ayant un intérêt clinique ou didactique (situation clinique inhabituelle, complication…)</p>
                            <p>Un cas clinique est présenté selon le plan suivant :</p>
                            <p>-Introduction</p>
                            <p>-Observation</p>
                            <p>-Commentaires</p>
                            <p>-Références</p>
                            <strong><p>Caractéristiques :</p></strong>
                            <p>- 500 à 1500 mots</p>
                            <p>- 10 références maximum</p>
                            <p>- 4 illustrations maximum</p>
                            <p>- 2 résumés : 1 en français et 1 en anglais</p>
                            <p>- Mots clés en français et en anglais</p>
                            <h3>Article pédagogique</h3>
                            <p>Sont regroupés dans cette rubrique les articles de formation et d’information sur les spécialités tête et cou. Ces articles sont orientés vers le diagnostic et la thérapeutique à l’usage des étudiants et des praticiens :</p>
                            <p>-Stratégies décisionnelles (diagnostic, thérapeutique)</p>
                            <p>-Conduite à tenir dans une situation clinique précise</p>
                            <p>-Recommandations</p>
                             <a href="{{ asset('instruction/Instructionsauxauteurs.pdf') }}" class="btn btn-block btn-primary col-md-4 offset-md-8"><i class="fe fe-download mr-2">Telecharger en pdf</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
