import TabPanel from '@/Components/TabPanel';
import TabSelector from '@/Components/TabSelector';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Course } from '@/types/Models/course';
import { Head } from '@inertiajs/react';

export default function CoursePage({
    course,
}: {
    course: Course<{ panel: string }>;
}) {
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
                <div className="mx-auto flex w-full max-w-7xl gap-2 sm:px-6 lg:px-8 [&>*]:border-[1px] [&>*]:border-slate-200 [&>*]:shadow-lg [&>*]:shadow-slate-200/60">
                    <div
                        id="sidePanel"
                        className="h-max w-1/4 rounded-lg bg-white"
                    >
                        <TabSelector
                            panelName={'details'}
                            selected={
                                !course?.panel || course?.panel === 'details'
                            }
                        >
                            Details
                        </TabSelector>
                        <TabSelector
                            selected={course?.panel === 'events'}
                            panelName={'events'}
                        >
                            Events
                        </TabSelector>
                        <TabSelector
                            selected={course?.panel === 'delegates'}
                            panelName={'delegates'}
                        >
                            Delegates
                        </TabSelector>
                    </div>
                    <div
                        id="content-panel"
                        className="w-3/4 overflow-hidden bg-white p-6 shadow-sm sm:rounded-lg dark:bg-gray-800"
                    >
                        {!course?.panel ||
                            (course?.panel === 'details' && (
                                <TabPanel title="Course Details">
                                    This is the tab Panel
                                </TabPanel>
                            ))}
                        {course?.panel === 'events' && (
                            <TabPanel title="Course Events">
                                <ul>
                                    <li>Table 1</li>
                                    <li>Table 2</li>
                                </ul>
                            </TabPanel>
                        )}
                        {course?.panel === 'delegates' && (
                            <TabPanel title="Course delegates">
                                <ul>
                                    <li>Table 1</li>
                                    <li>Table 2</li>
                                </ul>
                            </TabPanel>
                        )}
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
