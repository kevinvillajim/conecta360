import Template from "../../components/Template";
import KanbanBoard from "../../components/DragNDrop/KanbanBoard.tsx";
import all from "../../components/all.js";

function Teams() {
  const supervisores = all.teams;

  const defaultCols = [];
  supervisores.map((supervisor) => {
    const col = {
      id: supervisor.id,
      name: supervisor.name,
    };

    defaultCols.push(col);
  });

  const asesores = all.users.filter((user) => user.id_rol === 3);

  const defaultTasks = [];
  asesores.map((asesor) => {
    const task = {
      id: "asesor" + asesor.id,
      id_user_leader: asesor.id_team,
      content: asesor.name,
    };

    defaultTasks.push(task);
  });

  return (
    <>
      <Template
        content={
          <div>
            <KanbanBoard
              defaultCols={defaultCols}
              defaultTasks={defaultTasks}
            />
          </div>
        }
        title="Teams"
      />
    </>
  );
}

export default Teams;
