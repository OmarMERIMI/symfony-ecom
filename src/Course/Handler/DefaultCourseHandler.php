<?php

namespace App\Course\Handler;

use App\Course\CourseHandlerInterface;
use App\DTO\Author;
use App\DTO\Category;
use App\DTO\Course;

class DefaultCourseHandler implements CourseHandlerInterface
{
    private array $courses = [];

    public function __construct()
    {
        $mehdi    = new Author('Mehdi Benali');
        $sara     = new Author('Sara Oukili');
        $karim    = new Author('Karim Tazi');
        $fatima   = new Author('Fatima Zahra El Idrissi');
        $youssef  = new Author('Youssef Chtioui');
        $nadia    = new Author('Nadia Benchekroun');

        $catWeb     = new Category('Développement Web');
        $catData    = new Category('Data Science');
        $catDesign  = new Category('Design');
        $catDevOps  = new Category('DevOps');
        $catMobile  = new Category('Développement Mobile');
        $catMkt     = new Category('Marketing Digital');
        $catPhoto   = new Category('Photographie');
        $catVideo   = new Category('Vidéo & Animation');

        $this->courses = [
            'full-stack-react-nodejs' => new Course(
                'Développement Web Full Stack : React 18 & Node.js',
                1190.00,
                'Créez des applications web modernes de A à Z : API REST avec Node/Express et interfaces dynamiques avec React 18.',
                'Ce cours complet vous guide dans la création d\'applications web professionnelles. Vous maîtriserez React 18 (hooks, context, React Query), Node.js avec Express, MongoDB, l\'authentification JWT et le déploiement sur VPS. Chaque section s\'appuie sur un projet concret.',
                $mehdi,
                $catWeb,
                'full-stack-react-nodejs',
                'https://picsum.photos/seed/reactnode/800/450',
                4.8,
                12340,
                '42h',
                'Intermédiaire',
                'Bestseller'
            ),
            'python-data-science-ml' => new Course(
                'Python pour la Data Science & Machine Learning',
                890.00,
                'Maîtrisez NumPy, Pandas, Scikit-Learn et Matplotlib pour analyser des données et entraîner vos premiers modèles ML.',
                'Partez de zéro et devenez opérationnel en Data Science avec Python. Le cours couvre l\'analyse exploratoire, la visualisation, la régression, la classification, le clustering et une introduction aux réseaux de neurones avec TensorFlow/Keras. Projets réels inclus.',
                $sara,
                $catData,
                'python-data-science-ml',
                'https://picsum.photos/seed/pythonml/800/450',
                4.9,
                8670,
                '35h',
                'Intermédiaire',
                'Bestseller'
            ),
            'ux-ui-figma-pro' => new Course(
                'UI/UX Design avec Figma — Du débutant au professionnel',
                690.00,
                'Apprenez à concevoir des interfaces utilisateur esthétiques et ergonomiques avec Figma, l\'outil de référence des designers.',
                'Ce cours vous enseigne les fondamentaux du design centré utilisateur (UX Research, wireframing, prototypage), la maîtrise complète de Figma (auto-layout, composants, variables), ainsi que les principes de design systems. Vous repartirez avec un portfolio de 3 projets.',
                $nadia,
                $catDesign,
                'ux-ui-figma-pro',
                'https://picsum.photos/seed/figmadesign/800/450',
                4.7,
                5890,
                '28h',
                'Débutant',
                'Nouveau'
            ),
            'devops-docker-kubernetes' => new Course(
                'DevOps Complet : Docker, Kubernetes & GitHub Actions',
                1090.00,
                'Automatisez vos déploiements avec Docker, orchestrez vos conteneurs avec Kubernetes et mettez en place des pipelines CI/CD robustes.',
                'Ce cours intensif couvre Docker (images, volumes, réseaux, Docker Compose), Kubernetes (pods, services, deployments, Helm), la mise en place de pipelines CI/CD avec GitHub Actions et GitLab CI, ainsi que la supervision avec Prometheus & Grafana.',
                $youssef,
                $catDevOps,
                'devops-docker-kubernetes',
                'https://picsum.photos/seed/dockerk8s/800/450',
                4.8,
                6240,
                '38h',
                'Avancé',
                ''
            ),
            'flutter-dart-mobile' => new Course(
                'Flutter & Dart — Développement Mobile iOS & Android',
                790.00,
                'Créez des applications mobiles natives pour iOS et Android avec un seul codebase Flutter. De la théorie au Play Store.',
                'Ce cours couvre Dart de zéro, Flutter (widgets, navigation, state management avec Riverpod), la consommation d\'APIs REST, Firebase (auth, Firestore, storage), les notifications push et la publication sur le Google Play Store et l\'App Store.',
                $karim,
                $catMobile,
                'flutter-dart-mobile',
                'https://picsum.photos/seed/flutterdart/800/450',
                4.6,
                3450,
                '31h',
                'Intermédiaire',
                'Nouveau'
            ),
            'marketing-digital-seo' => new Course(
                'Marketing Digital, SEO & Google Ads',
                590.00,
                'Maîtrisez le marketing en ligne : référencement naturel (SEO), publicité Google Ads, réseaux sociaux et email marketing.',
                'Ce cours pratique vous apprend à attirer du trafic qualifié, créer des campagnes Google Ads rentables, optimiser votre référencement naturel avec des techniques SEO on-page et off-page, analyser vos résultats avec Google Analytics 4 et construire une stratégie digitale cohérente.',
                $fatima,
                $catMkt,
                'marketing-digital-seo',
                'https://picsum.photos/seed/digitalmarketing/800/450',
                4.7,
                9120,
                '22h',
                'Débutant',
                'Bestseller'
            ),
            'photographie-lightroom' => new Course(
                'Photographie Numérique & Retouche Lightroom',
                420.00,
                'Passez du mode automatique à la maîtrise complète de votre appareil photo et sublimez vos photos avec Lightroom Classic.',
                'Apprenez à contrôler l\'exposition, la mise au point, la profondeur de champ et la composition pour des photos professionnelles. La deuxième partie du cours est entièrement dédiée à Lightroom Classic : organisation de la bibliothèque, développement RAW, retouche locale et exportation.',
                $mehdi,
                $catPhoto,
                'photographie-lightroom',
                'https://picsum.photos/seed/photolr/800/450',
                4.5,
                2780,
                '18h',
                'Débutant',
                ''
            ),
            'premiere-pro-montage' => new Course(
                'Adobe Premiere Pro — Montage Vidéo Professionnel',
                550.00,
                'Montez vos vidéos comme un pro avec Adobe Premiere Pro : coupes, transitions, étalonnage, sous-titres et export multi-plateformes.',
                'Ce cours couvre l\'interface Premiere Pro, l\'organisation de projets vidéo, le montage image (J-cut, L-cut, multicam), le mixage audio, l\'étalonnage des couleurs avec Lumetri, l\'intégration avec After Effects pour les effets visuels et l\'export optimisé pour YouTube, Instagram et la diffusion TV.',
                $sara,
                $catVideo,
                'premiere-pro-montage',
                'https://picsum.photos/seed/premierevideo/800/450',
                4.6,
                4120,
                '25h',
                'Intermédiaire',
                ''
            ),
        ];
    }

    /** @return Course[] */
    public function fetchAllCourses(): array
    {
        return array_values($this->courses);
    }

    public function getCourseBySlug(string $slug): ?Course
    {
        return $this->courses[$slug] ?? null;
    }

    /** @return Course[] */
    public function findSimilarCourses(Course $course): array
    {
        $similar = array_filter($this->courses, function (Course $item) use ($course) {
            return $item->getSlug() !== $course->getSlug()
                && $item->getCategory()->getName() === $course->getCategory()->getName();
        });

        if (empty($similar)) {
            $similar = array_filter($this->courses, function (Course $item) use ($course) {
                return $item->getSlug() !== $course->getSlug();
            });
        }

        $similar = array_values($similar);
        shuffle($similar);
        return array_slice($similar, 0, 3);
    }
}
