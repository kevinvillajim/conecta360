import PropTypes from "prop-types";
import IconButton from "@mui/material/IconButton";
import DeleteIcon from "@mui/icons-material/Delete";
import EditIcon from "@mui/icons-material/Edit";
import ExpandMoreIcon from "@mui/icons-material/ExpandMore";
import { useState } from "react";

function Card({
  title,
  model,
  provider,
  img,
  description,
  object,
  price,
  categoria,
  costo,
  costoMayor,
}) {
  const [showMoreProd, setShowMoreProd] = useState(false);

  const handleShowEdit = (id) => () => {
    // Lógica para editar con el ID
    console.log("Edit clicked for ID:", id);
  };

  const handleDelete = (id) => () => {
    // Lógica para eliminar con el ID
    console.log("Delete clicked for ID:", id);
  };

  return (
    <>
      {object.map((item, index) => (
        <div
          key={index}
          className="w-[100%] bg-[white] p-[1rem] rounded-lg shadow-md shadow-[#727272] grid gap-[5px]"
        >
          <div className="flex justify-between">
            <h1 className="text-left text-2xl">{item[title]}</h1>
            <div id="containerCheck">
              <input
                type="checkbox"
                className="transform scale-150 checkProd"
                value={item.id}
              />
            </div>
          </div>
          <h2 className="text-left text-xl">{item[model]}</h2>
          <h3 className="text-left text-lg">{item[provider]}</h3>
          <div className="w-[100%] h-[250px]">
            <img
              src={item[img]}
              alt={`Product - ${index}`}
              className="w-[100%] h-[100%] object-contain"
            />
          </div>
          <p className="">{item[description]}</p>
          <b>
            <span className="text-lg">{`$${item[price]} `}</span>
          </b>
          <div className="flex justify-between">
            <div>
              <IconButton
                aria-label="fingerprint"
                color="black"
                onClick={handleShowEdit(item.id)}
              >
                <EditIcon />
              </IconButton>
              <IconButton
                aria-label="fingerprint"
                color="error"
                onClick={handleDelete(item.id)}
              >
                <DeleteIcon />
              </IconButton>
            </div>
            <div>
              <IconButton
                aria-label="fingerprint"
                color="black"
                onClick={() => setShowMoreProd(!showMoreProd)}
              >
                <ExpandMoreIcon />
              </IconButton>
            </div>
          </div>
          <div
            className={
              showMoreProd === false ? "hidden" : "inline flex gap-3 flex-col"
            }
          >
            <div>
              <h2 className="text-sm mb-[0.5rem]">Categorias:</h2>
              <div className="flex ">
                <div className="rounded-full px-[1rem] py-[0.2rem] border-2 border-black">
                  <b>{item[categoria]}</b>
                </div>
              </div>
            </div>
            <div>
              <span className="text-sm">Costo:</span>
              <br />
              <span className="text-lg">{`$${item[costo]} `}</span>
            </div>
            <div>
              <span className="text-sm">Costo:</span>
              <br />
              <span className="text-lg">{`$${item[costoMayor]} `}</span>
            </div>
          </div>
        </div>
      ))}
    </>
  );
}

Card.propTypes = {
  title: PropTypes.string.isRequired,
  model: PropTypes.string.isRequired,
  provider: PropTypes.string.isRequired,
  img: PropTypes.string.isRequired,
  description: PropTypes.string.isRequired,
  object: PropTypes.array.isRequired,
  price: PropTypes.string.isRequired,
  categoria: PropTypes.string.isRequired,
  costo: PropTypes.string.isRequired,
  costoMayor: PropTypes.string.isRequired,
};

export default Card;
