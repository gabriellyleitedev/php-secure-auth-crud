# 🛡️ AuthGuard & Contact Manager

![PHP Version](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![Status](https://img.shields.io/badge/Status-Production--Ready-success?style=for-the-badge)

Uma aplicação robusta de gerenciamento de contatos que prioriza a segurança e a integridade dos dados. Esse projeto implementa um fluxo completo de autenticação e persistência utilizando práticas modernas de backend em PHP puro.

## 💎 Diferenciais Estruturais

* **Data Security (PDO):** Implementação de *Prepared Statements* para blindagem total contra SQL Injection.
* **Session Integrity:** Sistema de controle de acesso que valida o estado de autenticação em nível de rota, garantindo que áreas sensíveis sejam inacessíveis a usuários não autorizados.
* **Modular Architecture:** Separação de responsabilidades de interface através de blocos reutilizáveis (`include_once`), facilitando a manutenção e escalabilidade do frontend.
* **Responsive UX:** Interface adaptativa construída sobre o ecossistema Bootstrap 5, oferecendo uma experiência fluida em dispositivos móveis e desktop.

## 🛠️ Stack Tecnológica

- **Core:** PHP 8.x (Backend Engine)
- **Persistence:** MySQL (RDBMS)
- **Interface:** HTML5, CSS3, JavaScript & Bootstrap 5
- **Security Drivers:** PDO (PHP Data Objects)

## 📸 Screenshots
<img width="1919" height="972" alt="image" src="https://github.com/user-attachments/assets/ad116dfe-9c10-409f-9a62-218ab5c208c0" />

## 📂 Organização do Diretório

```text
├── core/
│   └── conexao.php      # Driver de conexão Singleton-pattern
├── auth/
│   └── logar.php        # Engine de autenticação e sessão
├── assets/              # Recursos estáticos (CSS, JS, Imagens)
├── views/               # Camada de apresentação (UI)
└── database/
    └── schema.sql       # Script de migração do banco de dados
