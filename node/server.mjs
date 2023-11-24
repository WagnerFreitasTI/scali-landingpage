import express from 'express';
import fetch from 'node-fetch';
import bodyParser from 'body-parser';
import cors from 'cors';

const app = express();
const port = 3000;

app.use(bodyParser.json());
app.use(cors());

app.post('/enviar-formulario', async (req, res) => {

    const formData = req.body;
    console.log('Dados do formulário recebidos:', formData);

    // Faça a solicitação para a API do CRM Lasso
    try {
        const response = await fetch('https://api.lassocrm.com/v1/registrants', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer eyJhbGciOiJSUzI1NiJ9.eyJleHAiOjcyMjY1ODI0MDAsInRva2VuRGF0YSI6IntcbiAgXCJwcm9qZWN0SWRcIiA6IDIxODE1LFxuICBcImNsaWVudElkXCIgOiAxMDc2LFxuICBcIm5hbWVcIiA6IFwibGFzc29SZWdpc3RyYXRpb25cIlxufSIsImlzcyI6Ikxhc3NvVG9rZW4iLCJhdWQiOiJMYXNzbyIsInRva2VuSWQiOjQ2MTAyfQ.GeArgFT43cCm2V0DoSeCkQVqaPsXXgqwLaqUJaHRsd58Sy0fDd-MoIF53mqFJalnvuQKVJIA9Zqw0hcv99hA0LrVO6guIZiU-NSeLwBgbuXwI0wkREBDyNnMlrOsGDEceCgY1DfmS_5JgiEjskvzuTtZ7rquBlhsYZ6IjC_6qD29-K8bgMchQG6aXxd45W-bjFtQGddNkfuyP2oILWqPYs3Ng8SPoZo5JvvIESAdFUckXH0-ekcVL0XgbXnYEpsIeuw8-ZEngd0dIdFPNZ7getU3lJ4XAAvwh2FLmET3TDoKcVzE-wOpVPbPuCeM4Uvdgw3U1o7CqDpfZn9mf9vb-Q'
            },
            body: JSON.stringify(formData)
        });

        // Verifique se a solicitação foi bem-sucedida
        if (response.ok) {
            const responseData = await response.json();
            console.log('Resposta da API do Lasso:', responseData);
            res.status(200).json(responseData);
        } else {
            const errorData = await response.json();
            console.error('Erro na API do Lasso:', errorData);
            res.status(response.status).json(errorData);
        }
    } catch (error) {
        console.error('Erro ao enviar para a API do Lasso:', error);
        res.status(500).json({ error: 'Erro interno do servidor' });
    }
});

app.listen(port, () => {
    console.log(`Servidor escutando na porta ${port}`);
});
