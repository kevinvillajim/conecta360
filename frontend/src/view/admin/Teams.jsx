import Template from "../../components/Template";
import IconButton from "@mui/material/IconButton";
import DeleteSweepIcon from "@mui/icons-material/DeleteSweep";
import KanbanBoard from "../../components/DragNDrop/KanbanBoard.tsx";
import all from "../../components/all.js";

function Teams() {
  const defaultCols = all.teams;

  const asesores = all.users.filter((user) => user.id_rol === 3);

  const defaultTasks = [];
  asesores.map((asesor) => {
    const task = {
      id: asesor.id,
      id_user_leader: 1,
      content: asesor.name,
    };

    defaultTasks.push(task);
  });

  // const defaultTasks = [
  //   {
  //     id: 1,
  //     id_user_leader: 1,
  //     content: "List admin APIs for dashboard",
  //   },
  //   {
  //     id: 2,
  //     id_user_leader: 1,
  //     content: "List admin A for dashboard",
  //   },
  // ];

  return (
    <>
      <Template
        content={
          <div>
            <div className="mb-4">
              <IconButton
                aria-label="delete-selected"
                color="error"
                // onClick={handleDeleteSelected}
              >
                <DeleteSweepIcon />
              </IconButton>
            </div>
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
