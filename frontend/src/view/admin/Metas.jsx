import Template from "../../components/Template";
import ProgressBar from "../../components/ProgressBar";

function Teams() {
  return (
    <>
      <Template
        content={
          <div>
            <ProgressBar totalValue={50} nameTeam="Kevin" />
          </div>
        }
        title="Metas"
      />
    </>
  );
}

export default Teams;
