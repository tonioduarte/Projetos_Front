import { useState, useEffect, useRef } from "react";
import "./style.css";
import api from "../../services/api";

function Home() {
  const [users, setUsers] = useState([]);

  const inputName = useRef();
  const inputAge = useRef();
  const inputEmail = useRef();

  async function getUsers() {
    const usersFromApi = await api.get("/usuarios");
    setUsers(usersFromApi.data);
  }

  async function createUser() {
    await api.post("/usuarios", {
      name: inputName.current.value,
      age: inputAge.current.value,
      email: inputEmail.current.value,
    });
    getUsers();
  }

  async function deleteUser(id) {
    await api.delete(`/usuarios/${id}`);
    getUsers();
  }

  useEffect(() => {
    getUsers();
  }, []);

  return (
    <>
      <div className="container">
        <form>
          <h1>Cadastro de Usuário</h1>
          <input type="text" name="name" placeholder="Nome" ref={inputName} />
          <input type="text" name="age" placeholder="Idade" ref={inputAge} />
          <input
            type="email"
            name="email"
            placeholder="Email"
            ref={inputEmail}
          />
          <button type="submit" onClick={createUser}>Cadastrar</button>
        </form>
        {users.map((user) => (
          <div key={user.id} className="card">
            <p>
              Nome: <span>{user.name}</span>
            </p>
            <p>
              Idade: <span>{user.age}</span>
            </p>
            <p>
              Email: <span>{user.email}</span>
            </p>
            <button onClick={() => deleteUser(user.id)}>
              <img
                width="26"
                height="26"
                src="https://img.icons8.com/metro/26/F25081/trash.png"
                alt="trash"
              />
            </button>
          </div>
        ))}
      </div>
    </>
  );
}

export default Home;
