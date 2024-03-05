<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            'description' => "Coxee é uma plataforma de comércio eletrônico líder em Angola, oferecendo uma vasta seleção de produtos e serviços para atender às necessidades dos consumidores angolanos. Com uma interface amigável e intuitiva, Coxee torna a experiência de compra online fácil e conveniente para todos os usuários.

Navegue por uma ampla gama de categorias, desde eletrônicos de última geração até moda, produtos de beleza, artigos para o lar e muito mais. Cada produto é cuidadosamente apresentado com imagens nítidas e descrições detalhadas para garantir que os clientes façam escolhas informadas.

A segurança é uma prioridade na Coxee. Oferecemos uma variedade de opções de pagamento seguras, incluindo cartões de crédito, débito e outros métodos de pagamento online populares em Angola. Além disso, nossa equipe está empenhada em garantir que suas compras sejam entregues de forma rápida e confiável.

Desfrute de recursos adicionais, como avaliações de produtos, sistema de classificação de vendedores e suporte ao cliente dedicado para garantir uma experiência de compra excepcional em Coxee. Junte-se a nós e descubra uma nova maneira conveniente e confiável de fazer compras online em Angola. Coxee - onde suas necessidades encontram conveniência.",
            'short_des' => "Coxee é uma plataforma de comércio eletrônico que oferece uma ampla variedade de produtos e serviços para consumidores em Angola. O site provavelmente inclui uma interface intuitiva que permite aos usuários navegar facilmente pelos produtos, categorias e ofertas especiais.",
            'photo' => "image.jpg",
            'logo' => 'logo.jpg',
            'address' => "Angola, Luanda, Sapú 2",
            'email' => "coxee.com",
            'phone' => "945047525",
        );
        DB::table('settings')->insert($data);
    }
}