import Modal from '@/Components/Modal';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Course } from '@/types/Models/course';
import { PaginatedData } from '@/types/paginatatedData';
import { Head, Link, router } from '@inertiajs/react';

export default function CoursesPage({
    data,
    addNew,
}: {
    data: PaginatedData<Course>;
    addNew: boolean;
}) {
    const courses = data.data;

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Courses
                </h2>
            }
        >
            <Head title="Courses" />

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div id="banner" className="fontd">
                            <button
                                onClick={() => {
                                    router.get(
                                        route('courses.index'),
                                        {
                                            addNew: true,
                                        },
                                        {
                                            only: ['addNew'],
                                        },
                                    );
                                }}
                            >
                                Add New
                            </button>
                        </div>
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
                                    {courses.map((course) => (
                                        <tr key={course.id}>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                {course.id}
                                            </td>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                {course.name}
                                            </td>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                {course.status}
                                            </td>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                {course.type}
                                            </td>
                                            <td className="border-b border-gray-300 px-4 py-2 text-center">
                                                <Link
                                                    href={`/courses/${course.id}`}
                                                    prefetch
                                                    cacheFor={'1m'}
                                                >
                                                    {' '}
                                                    View{' '}
                                                </Link>
                                            </td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                            <Modal
                                show={addNew}
                                onClose={() => {
                                    // router.reload({
                                    //     only: ['add-new'],
                                    //     data: {
                                    //         addNew: false,
                                    //     },
                                    // });
                                }}
                            >
                                <button
                                    onClick={() => {
                                        router.get(
                                            route('courses.index'),
                                            {
                                                //
                                            },
                                            { only: ['addNew'] },
                                        );
                                    }}
                                >
                                    Close this bitch
                                </button>
                                <div className="bg-white">
                                    This is the Add new
                                </div>
                            </Modal>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
