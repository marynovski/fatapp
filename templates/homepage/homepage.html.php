<header>
    <h1 id="header-one">
        Welcome to {{ appName }}
    </h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ user.id }}</td>
            <td>{{ user.username }}</td>
            <td>{{ user.email }}</td>
        </tr>
    </table>
</header>