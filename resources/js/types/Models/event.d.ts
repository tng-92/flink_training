export type Event = {
    id: number;
    business_id: number;
    course_id: number;
    trainer_id: number;
    created_by: number;
    code: number;
    status: number;
    start_date: string; // YYYY-MM-DD format
    end_date: string; // YYYY-MM-DD format
    start_time: string | null; // HH:MM:SS format or null
    end_time: string | null; // HH:MM:SS format or null
    net_price: number;
    tax: number;
    gross_price: number;
    deleted_at: string | null;
    created_at: string | null;
    updated_at: string | null;
    course_name?: string;
};
