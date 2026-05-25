<?php

namespace App\Article\Handler;

use App\Article\ArticleHandlerInterface;
use App\DTO\Article;

class DefaultArticleHandler implements ArticleHandlerInterface
{
    private array $articles = [];

    public function __construct()
    {
        $this->articles = [
            'apprendre-coder-2024' => new Article(
                title: 'Comment apprendre à coder en 2024 : le guide complet',
                slug: 'apprendre-coder-2024',
                excerpt: 'Pas besoin d\'un diplôme d\'ingénieur. En 2024, apprendre à coder est à la portée de tous — à condition de suivre la bonne méthode. On vous explique tout.',
                content: <<<TEXT
<p>Le mythe du développeur qui passe des années à l'université avant de toucher une ligne de code est bel et bien mort. En 2024, de plus en plus de professionnels reconvertis, d'étudiants et de passionnés apprennent à coder depuis chez eux, souvent en moins d'un an, et décrochent leur premier poste peu après.</p>

<h2>Par où commencer ?</h2>
<p>La première erreur que font presque tous les débutants est de vouloir tout apprendre à la fois. HTML, CSS, JavaScript, Python, React, Node.js… la liste est infinie et la tentation de sauter de l'un à l'autre est grande. Résistez-y.</p>
<p><strong>Notre conseil :</strong> choisissez un seul langage et tenez-y pendant au moins trois mois. Pour le web, JavaScript est le choix le plus polyvalent. Pour la data, Python s'impose sans discussion.</p>

<h2>La méthode qui fonctionne vraiment</h2>
<p>Les développeurs qui progressent le plus vite ont tous un point commun : ils construisent des projets réels dès le départ. Ne passez pas des semaines sur des tutoriels théoriques. Après les bases, lancez-vous dans un projet personnel — même petit, même imparfait.</p>
<ul>
    <li><strong>Semaines 1-4 :</strong> les fondamentaux du langage (variables, fonctions, conditions, boucles)</li>
    <li><strong>Semaines 5-8 :</strong> premier projet simple (todo app, calculatrice, quiz)</li>
    <li><strong>Semaines 9-16 :</strong> projet intermédiaire avec une vraie API ou une base de données</li>
    <li><strong>Mois 4-6 :</strong> portfolio de 3 projets, premiers contacts avec des recruteurs</li>
</ul>

<h2>Les ressources incontournables</h2>
<p>Entre les cours en ligne, les bootcamps, les livres et YouTube, l'offre de formation n'a jamais été aussi riche. Le risque ? Se perdre dans les ressources plutôt que d'avancer. Voici notre sélection, testée et approuvée :</p>
<p>Pour <strong>JavaScript</strong> : The Odin Project (gratuit), JavaScript.info (gratuit), nos cours SkillHub (payant mais structuré).<br>
Pour <strong>Python</strong> : Automate the Boring Stuff (gratuit), Real Python (freemium).<br>
Pour <strong>le web en général</strong> : MDN Web Docs reste la référence absolue.</p>

<h2>L'état d'esprit à adopter</h2>
<p>Apprendre à coder n'est pas une question d'intelligence. C'est une question de régularité. 30 minutes par jour vaut infiniment mieux que 6 heures le dimanche. Créez une habitude, pas un sprint.</p>
<p>Et quand vous bloquez — et vous bloquerez — rappelez-vous que déboguer fait partie du métier. Un développeur senior passe autant de temps à chercher des bugs qu'à écrire du code.</p>
TEXT,
                authorName: 'Mehdi Benali',
                category: 'Carrière',
                publishedAt: '14 mai 2024',
                readTime: 8,
                imagePath: 'https://picsum.photos/seed/coder2024/900/500',
                likes: 342,
                tag: 'À la une'
            ),

            'react-vs-vue-2024' => new Article(
                title: 'React vs Vue en 2024 : lequel choisir pour votre projet ?',
                slug: 'react-vs-vue-2024',
                excerpt: 'React domine le marché de l\'emploi, Vue est plus accessible aux débutants. Mais lequel choisir vraiment ? Notre comparatif sans langue de bois.',
                content: <<<TEXT
<p>La guerre React vs Vue est l'une des plus vieilles querelles du front-end. En 2024, les deux frameworks sont matures, stables et activement maintenus. Alors, lequel choisir ?</p>

<h2>React : la force du nombre</h2>
<p>React, créé par Meta en 2013, est aujourd'hui utilisé par Netflix, Airbnb, Dropbox et des dizaines de milliers d'autres. Sa domination sur le marché de l'emploi est indiscutable : en France, on compte environ 3 offres React pour 1 offre Vue.</p>
<p>Son écosystème est colossal : Next.js pour le SSR, React Query pour le data-fetching, Zustand ou Redux pour le state management... Mais cet écosystème peut aussi intimider les débutants : il faut faire beaucoup de choix que Vue a déjà faits pour vous.</p>

<h2>Vue : la courbe d'apprentissage douce</h2>
<p>Vue, créé par Evan You (ex-Google), a été pensé dès le départ pour être progressivement adoptable. Sa syntaxe est plus intuitive, sa documentation est excellente en français, et Nuxt.js (l'équivalent de Next.js) est très bien conçu.</p>
<p>Vue 3 avec la Composition API a considérablement rapproché les deux frameworks en termes de paradigme. La distinction est moins nette qu'en 2019.</p>

<h2>Notre verdict</h2>
<p><strong>Choisissez React si :</strong> vous cherchez un emploi rapidement, vous travaillez sur un grand projet d'équipe, ou vous voulez accéder au maximum d'opportunités.</p>
<p><strong>Choisissez Vue si :</strong> vous débutez en front-end, vous travaillez seul ou en petite équipe, ou vous construisez une application de taille moyenne.</p>
<p>Dans tous les cas, une fois que vous maîtrisez l'un, passer à l'autre est une affaire de semaines, pas de mois. Les concepts (composants, réactivité, props, events) sont les mêmes.</p>
TEXT,
                authorName: 'Sara Oukili',
                category: 'Développement Web',
                publishedAt: '3 juin 2024',
                readTime: 6,
                imagePath: 'https://picsum.photos/seed/reactvue/900/500',
                likes: 218,
                tag: ''
            ),

            'competences-devops-recruteurs' => new Article(
                title: 'Les 10 compétences DevOps les plus recherchées en 2024',
                slug: 'competences-devops-recruteurs',
                excerpt: 'Docker, Kubernetes, Terraform, GitHub Actions... Quelles compétences DevOps les recruteurs mettent-ils en tête de liste ? On a analysé 500 offres d\'emploi pour vous.',
                content: <<<TEXT
<p>Le rôle de DevOps Engineer est l'un des plus demandés et des mieux rémunérés du secteur tech en 2024. Pour vous aider à cibler votre apprentissage, nous avons analysé plus de 500 offres d'emploi publiées entre janvier et avril 2024.</p>

<h2>Top 10 des compétences les plus citées</h2>
<ol>
    <li><strong>Docker</strong> — cité dans 94% des offres. Incontournable.</li>
    <li><strong>Kubernetes (K8s)</strong> — 78% des offres. Devient la norme pour l'orchestration.</li>
    <li><strong>CI/CD (GitHub Actions, GitLab CI, Jenkins)</strong> — 76%.</li>
    <li><strong>Terraform / Infrastructure as Code</strong> — 65%.</li>
    <li><strong>Linux & scripting Bash</strong> — 71%. Oui, Linux est toujours là.</li>
    <li><strong>AWS, GCP ou Azure</strong> — 68%. Au moins un cloud provider.</li>
    <li><strong>Prometheus + Grafana</strong> — 44%. La supervision monte en puissance.</li>
    <li><strong>Git avancé</strong> — 89%. Branching strategy, GitOps.</li>
    <li><strong>Python ou Go</strong> — 52% pour les scripts d'automatisation.</li>
    <li><strong>Sécurité (DevSecOps)</strong> — 38%, mais en forte progression.</li>
</ol>

<h2>Ce que ça signifie pour votre formation</h2>
<p>Si vous débutez en DevOps, concentrez-vous d'abord sur les 5 premières compétences de la liste. Docker + Kubernetes + CI/CD + Terraform + Linux forment un socle solide qui vous ouvrira la grande majorité des portes.</p>
<p>La sécurité (point 10) est en forte progression. Les entreprises cherchent de plus en plus des profils qui intègrent la sécurité dès la conception plutôt qu'en bout de chaîne. C'est le créneau à saisir pour les 2-3 prochaines années.</p>
TEXT,
                authorName: 'Youssef Chtioui',
                category: 'DevOps',
                publishedAt: '21 juin 2024',
                readTime: 5,
                imagePath: 'https://picsum.photos/seed/devopsskills/900/500',
                likes: 189,
                tag: ''
            ),

            'design-system-pourquoi' => new Article(
                title: 'Design System : pourquoi chaque équipe produit devrait en avoir un',
                slug: 'design-system-pourquoi',
                excerpt: 'Un design system, c\'est bien plus qu\'une bibliothèque de composants. C\'est un langage commun entre designers et développeurs. Voici pourquoi c\'est indispensable.',
                content: <<<TEXT
<p>Quand une startup passe de 2 à 20 personnes, les problèmes de cohérence visuelle explosent. Chaque équipe utilise ses propres couleurs, ses propres espacements, ses propres composants. Résultat : une interface fragmentée, des bugs visuels en cascade et des mises à jour qui prennent trois fois plus de temps qu'elles ne le devraient.</p>

<h2>Qu'est-ce qu'un design system, vraiment ?</h2>
<p>Un design system est bien plus qu'un Figma avec des composants. C'est un ensemble de règles, de ressources et d'outils qui permettent à toute une organisation de construire des produits numériques cohérents et rapidement.</p>
<p>Il comprend généralement :</p>
<ul>
    <li>Une bibliothèque de tokens de design (couleurs, typographie, espacements, ombres)</li>
    <li>Une bibliothèque de composants UI (boutons, formulaires, modales, tableaux…)</li>
    <li>Des guidelines d'usage et de rédaction (UX writing)</li>
    <li>De la documentation pour les équipes design ET dev</li>
</ul>

<h2>Les bénéfices concrets</h2>
<p><strong>Vitesse :</strong> une fois le système en place, construire une nouvelle page prend des heures au lieu de jours. Les composants sont prêts, testés, accessibles.</p>
<p><strong>Cohérence :</strong> plus de "ce bouton est-il le bon vert ?". Les décisions de design sont prises une fois, documentées, et appliquées partout automatiquement.</p>
<p><strong>Collaboration :</strong> designers et développeurs parlent le même langage. Un composant "Card" dans Figma correspond exactement à un composant Card dans le code.</p>

<h2>Par où commencer ?</h2>
<p>Ne cherchez pas à créer le design system parfait du premier coup. Commencez petit : définissez vos tokens (couleurs, polices, espacements), créez 5 à 10 composants essentiels, et documentez-les simplement.</p>
<p>Les outils recommandés : Figma pour le design, Storybook pour la documentation des composants, et un repo GitHub dédié avec versioning sémantique.</p>
TEXT,
                authorName: 'Nadia Benchekroun',
                category: 'Design',
                publishedAt: '8 juillet 2024',
                readTime: 7,
                imagePath: 'https://picsum.photos/seed/designsystem/900/500',
                likes: 156,
                tag: ''
            ),

            'python-vs-r-data-science' => new Article(
                title: 'Python ou R pour la Data Science ? Notre comparatif honnête',
                slug: 'python-vs-r-data-science',
                excerpt: 'Python est partout, R est adoré des statisticiens. Mais lequel apprendre en priorité quand on veut travailler en Data Science ? La vraie réponse, sans détour.',
                content: <<<TEXT
<p>Si vous avez déjà cherché à vous former en Data Science, vous êtes certainement tombé sur ce débat : Python ou R ? En 2024, la question a une réponse claire — même si elle est nuancée.</p>

<h2>Python : le langage universel de la data</h2>
<p>Python s'est imposé comme le langage dominant en Data Science, Machine Learning et Intelligence Artificielle. Ses atouts sont nombreux : une syntaxe claire et lisible, un écosystème de bibliothèques inégalé (NumPy, Pandas, Scikit-Learn, TensorFlow, PyTorch), et une communauté massive.</p>
<p>Surtout, Python n'est pas qu'un langage de data : c'est un langage généraliste. Ce que vous apprenez s'applique aussi au développement web, à l'automatisation, à la cybersécurité. Votre investissement est donc plus large.</p>

<h2>R : la puissance statistique</h2>
<p>R a été conçu par et pour les statisticiens. Ses packages spécialisés (ggplot2 pour la visualisation, tidyverse pour la manipulation de données, caret pour le ML) sont souvent plus riches que leurs équivalents Python dans des domaines très spécialisés.</p>
<p>R est encore très utilisé dans la recherche académique, la biostatistique, l'économétrie et les sciences sociales. Si vous visez ces secteurs, R reste pertinent.</p>

<h2>Le verdict en 2024</h2>
<p><strong>Apprenez Python en premier.</strong> Les offres d'emploi le demandent en grande majorité, l'écosystème ML/IA est construit autour de lui, et sa polyvalence vous ouvrira plus de portes.</p>
<p>Une fois Python maîtrisé, apprendre les bases de R en parallèle (ggplot2 en particulier) est un vrai plus sur un CV. Mais ce n'est pas la priorité.</p>
TEXT,
                authorName: 'Sara Oukili',
                category: 'Data Science',
                publishedAt: '29 juillet 2024',
                readTime: 9,
                imagePath: 'https://picsum.photos/seed/pythonvsr/900/500',
                likes: 274,
                tag: 'Populaire'
            ),

            'freelance-dev-tjm-clients' => new Article(
                title: 'Freelance dev : comment fixer son TJM et trouver ses premiers clients',
                slug: 'freelance-dev-tjm-clients',
                excerpt: 'Vous pensez à vous lancer en freelance ? Le plus dur n\'est pas de coder — c\'est de se vendre. Voici comment fixer un tarif juste et décrocher vos premières missions.',
                content: <<<TEXT
<p>Passer de salarié à freelance est un saut qui fait peur. Combien facturer ? Comment trouver des clients ? Et si je n'ai pas assez de travail ? Ces questions sont normales. Voici ce que personne ne vous dit franchement.</p>

<h2>Comment calculer son TJM (Taux Journalier Moyen)</h2>
<p>Il n'y a pas de formule magique, mais une méthode saine. Prenez votre salaire annuel cible, ajoutez les charges patronales et salariales (~45%), les coûts de structure (comptable, outils, bureau), et divisez par le nombre de jours facturables réels (environ 180-200 jours/an après vacances, prospection, admin).</p>
<p>Un développeur full-stack junior avec 2-3 ans d'expérience peut raisonnablement viser entre <strong>350 et 500€ HT/jour</strong> en France. Un senior confirmé dépasse souvent les 600-800€.</p>
<p><strong>Erreur classique :</strong> prendre son salaire net et diviser par 20 jours. C'est la meilleure façon de travailler pour rien.</p>

<h2>Trouver ses premiers clients</h2>
<p>Le réseau personnel est votre premier levier. Prévenez votre entourage, vos anciens collègues, vos ex-employeurs. La majorité des premières missions vient de là, pas de Malt ou Upwork.</p>
<p>En parallèle :</p>
<ul>
    <li>Optimisez votre profil LinkedIn (titre, résumé, exemples de projets)</li>
    <li>Inscrivez-vous sur Malt (France) — complétez votre profil à 100%</li>
    <li>Contribuez à des communautés Slack ou Discord de votre domaine</li>
    <li>Publiez régulièrement du contenu technique : articles, snippets, opinions</li>
</ul>

<h2>La règle d'or : ne jamais sous-facturer</h2>
<p>Facturer trop bas est contre-productif. Les clients qui paient peu ont tendance à être les plus exigeants et les moins respectueux de votre temps. Un tarif élevé inspire la confiance et attire de meilleurs clients.</p>
<p>Si vous avez peur que votre tarif fasse fuir — testez-le. Si 100% des prospects acceptent sans négocier, vous êtes trop bas. Le bon tarif est celui où environ 20-30% des prospects reculent.</p>
TEXT,
                authorName: 'Karim Tazi',
                category: 'Carrière',
                publishedAt: '12 août 2024',
                readTime: 11,
                imagePath: 'https://picsum.photos/seed/freelancedev/900/500',
                likes: 421,
                tag: 'Populaire'
            ),
        ];
    }

    public function fetchAll(): array
    {
        return array_values($this->articles);
    }

    public function findBySlug(string $slug): ?Article
    {
        return $this->articles[$slug] ?? null;
    }

    public function findRelated(Article $article, int $limit = 3): array
    {
        $related = array_filter($this->articles, fn($a) =>
            $a->getSlug() !== $article->getSlug()
            && $a->getCategory() === $article->getCategory()
        );

        if (count($related) < $limit) {
            $others = array_filter($this->articles, fn($a) => $a->getSlug() !== $article->getSlug());
            $related = array_merge($related, array_values($others));
        }

        $related = array_values(array_unique($related, SORT_REGULAR));

        return array_slice($related, 0, $limit);
    }
}
