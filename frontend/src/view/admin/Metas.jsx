import Template from "../../components/Template";
import ProgressBar from "../../components/ProgressBar";

function Teams() {
  return (
    <>
      <Template
        content={
          <div>
            <ProgressBar totalValue={10} />
          </div>
        }
        title="Metas"
      />
    </>
  );
}

export default Teams;
