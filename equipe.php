<?php
$pageTitle = "Notre Équipe - Kécolor";
include __DIR__ . '/includes/header.php';
?>

<main class="content container">
    <h1>Notre Équipe et Organigramme</h1>

    <!-- Section Organigramme -->
    <section class="organizational-chart">
        <h2>Structure Organisationnelle</h2>
        
        <div class="org-chart">
            <!-- Niveau 1: Directeur -->
            <div class="org-level level-1">
                <div class="org-box director">
                    <div class="org-avatar">👔</div>
                    <h3>Aymeric</h3>
                    <p class="position">Fondateur</p>
                </div>
            </div>
            <div class="org-level level-1">
                <div class="org-box director">
                    <div class="org-avatar">👔</div>
                    <h3>Corentin</h3>
                    <p class="position">Directeur</p>
                </div>
            </div>

            <!-- Niveau 2: Directeurs -->
            <div class="org-level level-2">
                <div class="org-box">
                    <div class="org-avatar">🏭</div>
                    <h3>PÔLE<br>PRODUCTION</h3>
                    
                </div>
                <div class="org-box">
                    <div class="org-avatar">💻</div>
                    <h3>PÔLE<br>LOGISTIQUE</h3>
                    
                </div>
                <div class="org-box">
                    <div class="org-avatar">📱</div>
                    <h3>PÔLE<br>MARKETING &<br><span>COMMUNICATION</span></h3>
                </div>
                <div class="org-box">
                    <div class="org-avatar">💼</div>
                    <h3>PÔLE<br>COMMERCIAL</h3>
                </div>
                <div class="org-box">
                    <div class="org-avatar">📝​</div>
                    <h3>PÔLE<br>ADMINISTRATIF<br>& FINANCIER</h3>
                </div>
            </div>

            <!-- Niveau 3: Responsables -->
            <div class="org-level level-3">
                <div class="org-category">
                    <h4>Pôle Production</h4>
                    <div class="team-members">
                        <div class="org-box small">
                            <div class="org-avatar">🏭</div>
                            <h4>Arthur</h4>
                            <p>Responsable Production</p>
                        </div>
                        <div class="org-box small">
                            <div class="org-avatar">🏭</div>
                            <h4>Nael</h4>
                            <p>Techniciens de Production</p>
                        </div>
                    </div>
                </div>

                <div class="org-category">
                    <h4>Pôle Logistique</h4>
                    <div class="team-members">
                        <div class="org-box small">
                            <div class="org-avatar">⚙️</div>
                            <h4>Salim</h4>
                            <p>Responsable Logistique</p>
                        </div>
                        <div class="org-box small">
                            <div class="org-avatar">📦</div>
                            <h4>Damien</h4>
                            <p>Préparateurs de Commandes</p>
                        </div>
                    </div>
                </div>

                <div class="org-category">
                    <h4>Pôle Marketing & Communication</h4>
                    <div class="team-members">
                        <div class="org-box small">
                            <div class="org-avatar">📱</div>
                            <h4>Yann</h4>
                            <p>Responsable Marketing</p>
                        </div>
                        <div class="org-box small">
                            <div class="org-avatar">📞</div>
                            <h4>Lilian</h4>
                            <p>Community Manager</p>
                        </div>
                        <div class="org-box small">
                            <div class="org-avatar">✏️​</div>
                            <h4>Kenji</h4>
                            <p>Graphiste / Designer</p>
                        </div>
                    </div>
                </div>

                <div class="org-category">
                    <h4>Pôle Commercial</h4>
                    <div class="team-members">
                        <div class="org-box small">
                            <div class="org-avatar">💻</div>
                            <h4>Nathanael</h4>
                            <p>Responsable Commercial</p>
                        </div>
                        <div class="org-box small">
                            <div class="org-avatar">🗣️​</div>
                            <h4>Enzo</h4>
                            <p>Chargé de Clientèle</p>
                        </div>
                    </div>
                </div>

                <div class="org-category">
                    <h4>Pôle Administrative & Financier</h4>
                    <div class="team-members">
                        <div class="org-box small">
                            <div class="org-avatar">💻</div>
                            <h4>Matthieu</h4>
                            <p>Responsable Administratif<br>et Financier</p>
                        </div>
                        <div class="org-box small">
                            <div class="org-avatar">🔒</div>
                            <h4>Thomas</h4>
                            <p>Assistant Administratif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Équipes détaillées -->
    <section class="teams-details">
        <h2>Nos Équipes</h2>

        <div class="team-section">
            <h3>🏭 Équipe Production</h3>
            <div class="team-grid">
                <div class="member-card">
                    <div class="member-avatar">🏭</div>
                    <h4>Arthur</h4>
                    <p class="role">Responsable Production</p>
                    <p class="bio">Il supervise, organise et optimise l’ensemble du
                        processus de production afin d’assurer la
                        qualité, la sécurité, les délais et la rentabilité
                        des opérations, tout en garantissant la
                        satisfaction des clients internes et externes.</p>
                </div>
                <div class="member-card">
                    <div class="member-avatar">🏭</div>
                    <h4>Nael</h4>
                    <p class="role">Techniciens de Production</p>
                    <p class="bio">Il assure le bon déroulement 
                        des opérations de fabrication en veillant au respect des
                        procédures, de la qualité, des délais et des
                        normes de sécurité. Et contribue à la
                        maintenance de premier niveau des
                        équipements</p>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h3>🏭 Équipe Logistique</h3>
            <div class="team-grid">
                <div class="member-card">
                    <div class="member-avatar">⚙️</div>
                    <h4>Salim</h4>
                    <p class="role">Responsable Logistique</p>
                    <p class="bio">Il organise,
                        coordonne et optimise l’ensemble des flux
                        logistiques de l’entreprise, depuis
                        l’approvisionnement jusqu’à la livraison des
                        produits finis, afin de garantir la qualité de
                        service, la maîtrise des coûts et le respect
                        des délais.</p>
                </div>
                <div class="member-card">
                    <div class="member-avatar">📦</div>
                    <h4>Damien</h4>
                    <p class="role">Préparateurs de Commandes</p>
                    <p class="bio">Il assure la préparation, le conditionnement
                        et l’expédition des commandes clients dans
                        le respect des délais, des procédures de
                        qualité et des consignes de sécurité.
                        Et garanti la conformité des produits
                        préparés et contribue au bon
                        fonctionnement de l’entrepôt</p>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h3>Équipe Marketing & Communication</h3>
            <div class="team-grid">
                <div class="member-card">
                    <div class="member-avatar">📱</div>
                    <h4>Yann</h4>
                    <p class="role">Responsable Marketing</p>
                    <p class="bio">Il définit et
                        met en œuvre la stratégie marketing de
                        l’entreprise afin de développer sa notoriété,
                        renforcer son image de marque et soutenir
                        les objectifs commerciaux. Et pilote les
                        actions marketing, digitales et
                        communicationnelles pour accroître la
                        visibilité et la performance de l’entreprise
                        sur ses marchés.</p>
                </div>
                <div class="member-card">
                    <div class="member-avatar">📞</div>
                    <h4>Lilian</h4>
                    <p class="role">Community Manager</p>
                    <p class="bio">Il développe,
                        anime et fédère les communautés en
                        ligne autour de la marque sur les différents
                        réseaux sociaux et plateformes digitales. Et
                        assure la cohérence de la communication
                        digitale, renforce la notoriété de l’entreprise
                        et favorise l’engagement des utilisateurs</p>
                </div>
                <div class="member-card">
                    <div class="member-avatar">✏️</div>
                    <h4>Kenji</h4>
                    <p class="role">Graphiste / Designer</p>
                    <p class="bio">Il conçoit et
                        réalise des supports visuels destinés à
                        promouvoir l’image de marque de
                        l’entreprise sur différents canaux (print,
                        digital, réseaux sociaux, packaging, etc.).
                        Et traduit les besoins marketing et
                        communication en créations graphiques
                        cohérentes, esthétiques et impactantes</p>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h3>💼 Équipe Commercial</h3>
            <div class="team-grid">
                <div class="member-card">
                    <div class="member-avatar">💼</div>
                    <h4>Nathanael</h4>
                    <p class="role">Responsable Commercial</p>
                    <p class="bio">Il définit et
                        met en œuvre la stratégie commerciale
                        de l’entreprise afin de développer le chiffre
                        d’affaires, fidéliser la clientèle et conquérir
                        de nouveaux marchés. Il encadre et anime
                        l’équipe commerciale pour atteindre les
                        objectifs fixés par la direction.</p>
                </div>
                <div class="member-card">
                    <div class="member-avatar">🗣️</div>
                    <h4>Enzo</h4>
                    <p class="role">Chargé de Clientèle</p>
                    <p class="bio">Il assure la
                        gestion, le suivi et la fidélisation d’un
                        portefeuille de clients en garantissant un
                        service de qualité. Et identifie les besoins des
                        clients, leur propose des solutions
                        adaptées et contribue au développement
                        commercial de l’entreprise.</p>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h3>📝 Équipe Administrative & Financier</h3>
            <div class="team-grid">
                <div class="member-card">
                    <div class="member-avatar">📝</div>
                    <h4>Matthieu</h4>
                    <p class="role">Responsable Administratif et Financier</p>
                    <p class="bio">Il assure la gestion administrative,
                        comptable et financière de l’entreprise afin
                        de garantir la fiabilité des comptes, la
                        conformité légale et la bonne santé
                        financière de la structure. Et contribue à la
                        définition et à la mise en œuvre de la
                        stratégie financière en lien avec la direction
                        générale.</p>
                </div>
                <div class="member-card">
                    <div class="member-avatar">📝</div>
                    <h4>Thomas</h4>
                    <p class="role">Assistant Administratif</p>
                    <p class="bio">Il assure la
                        gestion et le suivi des tâches
                        administratives quotidiennes afin de
                        garantir le bon fonctionnement des services
                        internes. Et apporte un soutien
                        organisationnel et logistique à la direction
                        et aux équipes opérationnelles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Culture -->
    <section class="company-culture">
        <h2>Notre Culture d'Entreprise</h2>
        <div class="culture-points">
            <div class="culture-item">
                <h3>🤝 Collaboration</h3>
                <p>Nous croyons à la force du travail d'équipe et à l'échange d'idées constructif.</p>
            </div>
            <div class="culture-item">
                <h3>🚀 Innovation</h3>
                <p>Nous encourageons la prise de risque calculée et l'expérimentation continue.</p>
            </div>
            <div class="culture-item">
                <h3>📈 Développement</h3>
                <p>Chaque collaborateur a des opportunités de formation et d'évolution professionnelle.</p>
            </div>
            <div class="culture-item">
                <h3>🌍 Responsabilité</h3>
                <p>Nous opérons avec éthique et responsabilité envers nos collaborateurs et l'environnement.</p>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>

