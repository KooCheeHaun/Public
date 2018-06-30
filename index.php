SELECT * 
FROM tbl_emall_sales es 
INNER JOIN tbl_member pay_mem ON es.t_payer = pay_mem.t_member_id
INNER JOIN tbl_member buy_mem ON es.t_buyer = buy_mem.t_member_id  
