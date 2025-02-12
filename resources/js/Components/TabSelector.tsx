import { Link } from '@inertiajs/react';
import { PropsWithChildren } from 'react';

export default function TabSelector({
    children,
    selected,
    panelName,
    only,
}: PropsWithChildren<{
    panelName: string;
    selected?: boolean;
    only?: string | boolean;
}>) {
    return (
        <div
            className={`h-full hover:bg-slate-100 hover:font-bold ${selected && 'bg-slate-100 font-bold'}`}
            id="tab details-tab"
        >
            <Link
                className="block px-6 py-2"
                href={`?view=${panelName}`}
                only={only ? [`${only}`] : ['']}
                prefetch
                cacheFor={'1m'}
            >
                {children}
            </Link>
        </div>
    );
}
