import { PropsWithChildren } from 'react';

export default function TabPanel({
    children,
    title,
}: PropsWithChildren<{
    title: string;
}>) {
    return (
        <div className="text-gray-900 dark:text-gray-100">
            <h3 className="pb-6 text-2xl font-bold capitalize">{title}</h3>
            {children}
        </div>
    );
}
