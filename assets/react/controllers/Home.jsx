import React, { useState, useEffect, useRef } from "react";
import SearchBar from "./SearchBar";
import TrainingCard from "./TrainingCard";

import Container from "react-bootstrap/Container";
import Row from "react-bootstrap/Row";

export default ({ trainings }) => {
  trainings = JSON.parse(trainings);
  const searchRef = useRef(null);
  const [search, setSearch] = useState("");
  const [trainingList, setTrainingList] = useState([]);

  const handleSubmit = (e) => {
    console.log(trainings);
    e.preventDefault();
  };

  const handleChange = (e) => {
    setSearch(searchRef.current.value);
  };

  useEffect(() => {
    setTrainingList(trainings);
  }, []);

  useEffect(() => {
    const filteredTrainings = trainings.filter((training) =>
      training.name.toLowerCase().includes(search.toLowerCase())
    );
    setTrainingList(filteredTrainings);
  }, [search]);

  return (
    <>
      <Container fluid className="py-5 px-0">
        <SearchBar
          search={search}
          ref={searchRef}
          handleChange={handleChange}
          handleSubmit={handleSubmit}
        />
        <Row sm={3} className="sectionCard justify-content-center">
          {trainingList.map((training) => (
            <TrainingCard key={training.id} training={training} />
          ))}
        </Row>
      </Container>
    </>
  );
};
