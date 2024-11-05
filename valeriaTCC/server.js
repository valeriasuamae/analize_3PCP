const express = require('express');
const mysql = require('mysql2');
const app = express();
app.use(express.json());

// Conexão com o banco de dados
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'carrinho'
});

// Rota para adicionar item ao carrinho
app.post('/cart/add', (req, res) => {
    const { userId, productId, quantity } = req.body;
    
    db.query(`SELECT id FROM cart WHERE user_id = ?`, [userId], (err, result) => {
        if (err) throw err;

        let cartId = result.length > 0 ? result[0].id : null;

        // Se o usuário não tem um carrinho, cria um novo
        if (!cartId) {
            db.query(`INSERT INTO cart (user_id) VALUES (?)`, [userId], (err, result) => {
                if (err) throw err;
                cartId = result.insertId;

                // Adiciona o item ao carrinho
                addItemToCart(cartId, produtoId, quantity, res);
            });
        } else {
            // Adiciona o item ao carrinho existente
            addItemToCart(cartId, produtoId, quantity, res);
        }
    });
});

// Função para adicionar item ao carrinho
function addItemToCart(cartId, produtoId, quantity, res) {
    db.query(
        `INSERT INTO cart_items (cart_id, produto_id, quantity) VALUES (?, ?, ?)`,
        [cartId, produtoId, quantity],
        (err, result) => {
            if (err) throw err;
            res.json({ message: 'o item foi adicionado ao carrinho!' });
        }
    );
}

// Rota para visualizar o carrinho
app.get('/cart/:userId', (req, res) => {
    const userId = req.params.userId;

    db.query(`SELECT id FROM cart WHERE user_id = ?`, [userId], (err, result) => {
        if (err) throw err;

        if (result.length === 0) {
            return res.json({ message: ' o carrinho está vazio' });
        }

        const cartId = result[0].id;

        db.query(
            `SELECT produto.id, produto.name, produto.price, cart_items.quantity 
            FROM cart_items 
            JOIN produto ON cart_items.produto_id = produto.id 
            WHERE cart_id = ?`,
            [cartId],
            (err, items) => {
                if (err) throw err;
                res.json({ cart: items });
            }
        );
    });
});

// Rota para remover item do carrinho
app.delete('/cart/remove', (req, res) => {
    const { usuarioId, produtoId } = req.body;

    db.query(`SELECT id FROM cart WHERE user_id = ?`, [usuarioId], (err, result) => {
        if (err) throw err;

        if (result.length === 0) {
            return res.json({ message: 'No cart found for user' });
        }

        const cartId = result[0].id;

        db.query(
            `DELETE FROM cart_items WHERE cart_id = ? AND product_id = ?`,
            [cartId, productId],
            (err, result) => {
                if (err) throw err;
                res.json({ message: 'Item removed from cart!' });
            }
        );
    });
});

// Iniciar o servidor
app.listen(3000, () => {
    console.log('Server running on port 3000');
});
