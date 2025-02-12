export type Course<T = { object }> = {
    business_id: number;
    code: string;
    created_at: string;
    deleted_at: string | null;
    gross_price: number;
    id: number;
    name: string;
    net_price: number;
    owned_by: number;
    short_description: string;
    status: number;
    tax: number;
    type: number;
    updated_at: string;
    user_id: number;
} & T;
