import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Event } from '@/types/Models/event';
import { PaginatedData } from '@/types/paginatatedData';
import { Head } from '@inertiajs/react';

export default function Page({ data }: { data: PaginatedData<Event> }) {
    const events = data.data;
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Events
                </h2>
            }
        >
            <Head title="Events" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            <table className="w-full">
                                <thead>
                                    <tr>
                                        <th className="border-b-2 border-gray-300 px-4 py-2">
                                            ID
                                        </th>
                                        <th className="border-b-2 border-gray-300 px-4 py-2">
                                            Name
                                        </th>
                                        <th className="border-b-2 border-gray-300 px-4 py-2">
                                            Status
                                        </th>
                                        <th className="border-b-2 border-gray-300 px-4 py-2">
                                            Type
                                        </th>
                                        <th className="border-b-2 border-gray-300 px-4 py-2">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {events.map((event) => (
                                        <tr key={event.id}>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                {event.id}
                                            </td>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                {event.course_name ??
                                                    event.course_id}
                                            </td>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                {event.status}
                                            </td>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                {event.start_date}
                                            </td>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                view
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
