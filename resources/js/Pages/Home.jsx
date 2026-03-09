import GuestLayout from '@/Layouts/GuestLayout';
import { Head } from '@inertiajs/react';

export default function Home() {
    return (
        <GuestLayout>
            <Head title="Accueil" />

            <div style={{ textAlign: "center", marginTop: "80px" }}>
                <img src="/logo.png" width="120" alt="Logo" />
                <h1>Gestion du Bureau d’Ordre</h1>
                <p>
                    Le système de gestion du bureau d’ordre permet
                    l’enregistrement, le suivi et l’archivage des
                    courriers entrants et sortants.
                </p>
            </div>
        </GuestLayout>
    );
}
