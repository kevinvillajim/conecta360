import Template from "../../components/Template";
import ProgressBar from "../../components/ProgressBar";
import all from "../../components/all"
function Teams() {

  const getProductById = function (id, it, table) {
    const filteredProduct = all[table].filter((product) => product.id === id);
    if (filteredProduct.length > 0) {
      return filteredProduct[0][it];
    } else {
      return it + "no encontrado";
    }
  };


  const teamsContent = all.teams.map((team) => {
    const usersInTeam = all.users.filter((user) => team.id === user.id_team);
    console.log(`Usuarios para el equipo ${team.id}:`, usersInTeam);

    // Puedes ajustar la lógica para obtener el valor deseado del producto usando tu función
    const someValue = getProductById(team.id, "someProperty", "someTable");

    return (
      <div key={team.id}>
        <ProgressBar totalValue={50} nameTeam={team.name} />
        <p>{someValue}</p>
      </div>
    );
  });  


  return (
    <>
      <Template
        content={
          teamsContent
        }
        title="Metas"
      />
    </>
  );
}

export default Teams;
