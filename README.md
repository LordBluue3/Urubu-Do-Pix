# Urubu-Do-Pix
 Project created for a backend test at Noweb. <br/>
 Made with Laravel and MySQL

<img src="https://cdn.discordapp.com/attachments/701489669673844887/1160221067147759726/urubu-do-pix-1.png?ex=6533df12&is=65216a12&hm=6ee52b107fef551fecdd4f8f4ec92bc400f69545d083db2631e6d4c5b715614d&" alt="Descrição da imagem" height="300">

# About the test

"Criar um crud  com no mínimo 2 tabelas tirando as padrões do laravel, precisa ter autenticação, algum teste personalizado (nada muito complexo), utilizar seeder e factory para algo (sem ser as padrões do laravel) não precisa ser em todas as tabelas, porém precisa ser utilizado pelo menos uma vez, pode utilizar qualquer biblioteca que for do seu agrado como alpinejs, livewire, filament... fica a sua escolha.

Caso queira pode também criar um endpoint de api (não obrigatório).

Nesse teste analisaremos sua organização de código e seu conhecimento no framework, nem um projeto complexo, quanto mais simples melhor."

# How this project work? 
The user can register on the site and deposit money to render, but they cannot withdraw their money!

The admin can view users in the list, read user information, and delete users.
The admin will check the total amount collected from the users.
The admin can create, delete, edit, and read posts about 'Urubu do Pix'.


#How to run this project?

create the .env, and configure your database connection

![image](https://github.com/LordBluue3/Urubu-Do-Pix/assets/58037508/411a11ee-e1c9-4fe0-8e64-12eaf84ec01f)

To install the php dependencies

```bash
composer install
```
<br/>

To install the node dependencies
```bash
npm install
```
<br/>

To run the vite server

```bash
npm run dev
```

<br/>

To run the php server

```bash
php artisan serve
```

# To Do?

<h3>Front-End</h3>

Since this test is not for front-end, I focused on the back-end. <br/>

<ul>
    <li>Home Page</li>
    <li>Login Page</li>
    <li>Register Page</li>
    <li>User Dashboard</li>
    <li>Admin Dashboard</li>
</ul>

<h3>Back-End</h3>

I decided to write everything on my own so that they can evaluate my code. <br/>

<ul>
    <li>Login System</li>
    <li>Register System</li>
    <li>Deposit Money System</li>
    <li>Edit the information (user) System</li>
    <li>System for posting updates about 'Urubu do Pix'. (crud)</li>
    <li>Seeders and Factory</li>
</ul>

<h3>Database</h3>

<ul>
    <li>User Table</li>
    <li>Admin Table</li>
    <li>Post Table</li>
</ul>






