import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Course } from '@/types/Models/course';
import { Head } from '@inertiajs/react';

export default function CoursePage({ course }: { course: Course }) {
    console.log(course);
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
                <div className="mx-auto flex w-full max-w-7xl gap-2 sm:px-6 lg:px-8">
                    <div id="sidePanel" className="w-1/4 rounded-lg bg-white">
                        <div
                            className={`px-6 py-2 hover:bg-slate-100 hover:font-bold`}
                            id="tab details-tab"
                        >
                            Details
                        </div>
                        <div
                            className={`px-6 py-2 hover:bg-slate-100 hover:font-bold`}
                            id="tab events-tab"
                        >
                            Events
                        </div>
                    </div>
                    <div
                        id="content-panel"
                        className="w-3/4 overflow-hidden bg-white p-6 shadow-sm sm:rounded-lg dark:bg-gray-800"
                    >
                        <div className="text-gray-900 dark:text-gray-100">
                            {course.name}
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
