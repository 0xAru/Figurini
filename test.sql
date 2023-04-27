"requête permettant de récupérer les produits d'une commande en fonction de l'id d'un utilisateur"

SELECT p.* FROM products p 
LEFT JOIN command_detail cd ON p.product_id = cd.detail_product_id
LEFT JOIN commands c ON c.command_id = cd.detail_command_id
LEFT JOIN users u ON u.user_id = c.command_user_id
WHERE u.user_id = 1

SELECT p.* 
FROM products p, command_detail cd, commands c, users u
WHERE p.product_id = cd.detail_product_id 
AND c.command_id = cd.detail_command_id
AND u.user_id = c.command_user_id
AND u.user_id = 1